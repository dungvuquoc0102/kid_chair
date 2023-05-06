<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductC extends Controller
{
    private $STATUS;
    private $CATEGORY;
    // constructor
    function __construct() {
        $this->STATUS = config("const.STATUS");
        $this->CATEGORY = config("const.CATEGORY");
    }

    //Add Product
    public function productAddForm(){
        $categories = DB::table('category')->where('status', $this->STATUS["ACTIVE"])->get();
        return view('shop/AddProduct', compact("categories"));
    }

    public function productAdd(Request $request){
        $request->validate([
            'image' => ['required','image','mimes:jpg,png,jpeg,gif,svg','max:2048'],
        ]);
        $data = $request->all();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $str_rd = Str::random(20);
            $image->move(public_path("/images"),$str_rd.'.jpg');
            $str_rd = "/images/".$str_rd ;
            $product = array(
                'name' => $data['name'],
                'image' => $str_rd.'.jpg',
                'price' => $data['price'],
                'description' => $data['description'],
                'category_id' => $data['category_id'],
                'sub_category_id' => isset($data['sub_category_id'])?$data['sub_category_id']:null,
                'size' => $data['size']
            );
            $product_id = DB::table('product')->insertGetId($product);
            $product_color = array(
                "product_id" => $product_id,
                "color_id" => $data['color_id']
            );
            DB::table('product_color')->insert($product_color);
            return redirect('/ProductManager');
        }
    }

    //EditProduct

    public function productEditForm(Request $request){
        $data = $request->all();
        $product = DB::table('product')->where('product_id',$data['product_id'])->first();
        $categories = DB::table('category')->where('status', $this->STATUS["ACTIVE"])->get();
        $sub_categories = DB::table('sub_category')->where('category_id', $product->category_id)->where('status', $this->STATUS["ACTIVE"])->get();
        return view('shop/EditProduct',compact('product', 'categories', 'sub_categories'));
    }

    public function productEdit(Request $request){
        $data = $request->all();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $str_rd = Str::random(20);
            $image->move(public_path("/images"),$str_rd.'.jpg');
            $str_rd = "/images/".$str_rd ;
            $product = array(
                'name' => $data['name'],
                'image' => $str_rd.'.jpg',
                'price' => $data['price'],
                'description' => $data['description'],
                'category_id' => $data['category_id'],
                'sub_category_id' => isset($data['sub_category_id'])?$data['sub_category_id']:null,
                'size' => $data['size']
            );
        }
        else{
            $product = array(
                'name' => $data['name'],
                'price' => $data['price'],
                'description' => $data['description'],
                'category_id' => $data['category_id'],
                'sub_category_id' => isset($data['sub_category_id'])?$data['sub_category_id']:null,
                'size' => $data['size']
            );
        }
        DB::table('product')->where('product_id',$data['product_id'])->update($product);
        return redirect('/ProductManager');
    }

    // Get Products
    public function productManager(){
        $products = DB::table('product')->join('category', 'category.category_id','=','product.category_id')
        ->leftJoin('sub_category', 'sub_category.sub_category_id','=','product.sub_category_id')
        ->select('product.*', 'category.name as category', 'sub_category.name as sub_category')
        ->orderBy('product_id','desc')->paginate(3);
        return view('shop/ProductManager',compact('products'));
    }

    //get home product
    public function getHomeProduct(){
        $products = DB::table('product')->orderBy('product_id','desc')->take(5)->get();
        return view('customer/Home',compact('products'));
    }

    // get list product
    public function productList($sub_category_id, $orderBy){
        $products = DB::table('product')->where('sub_category_id', $sub_category_id)->orderBy($orderBy,'desc')->paginate(4);
        $product_sub_categories = DB::table('sub_category')
        ->join('category', 'sub_category.category_id', '=', 'category.category_id')
        ->where('category.name', $this->CATEGORY['PRODUCT'])->select("sub_category.*")->get();
        $category_id = DB::table('sub_category')->where('sub_category_id', $sub_category_id)->first()->category_id;
        $sub_categories = DB::table('sub_category')->where('category_id', $category_id)->get();
        return view('customer/ProductList',compact('products', 'product_sub_categories', 'orderBy', 'sub_category_id', 'sub_categories'));
    }

    // detail product
    public function productDetail($product_id){
        $product = DB::table('product')->where('product_id',$product_id)->first();
        $category_name = DB::table('category')->where('category_id', $product->category_id)->first()->name;
        $sub_category_name = DB::table('sub_category')->where('sub_category_id', $product->sub_category_id)->first()->name;
        $same_products = DB::table('product')->where('sub_category_id', $product->sub_category_id)
        ->where('product_id','!=',$product_id)->take(5)->get();
        return view('customer/ProductDetail',compact('product', 'same_products', 'category_name', 'sub_category_name'));
    }
}

?>
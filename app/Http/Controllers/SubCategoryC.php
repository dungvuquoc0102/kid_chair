<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SubCategoryC extends Controller
{
    private $STATUS;
    private $CATEGORY;
    // constructor
    function __construct() {
        $this->STATUS = config("const.STATUS");
        $this->CATEGORY = config("const.CATEGORY");
    }

    public function subCategoryManager(){
        $sub_categories = DB::table('sub_category')
        ->join('category', 'category.category_id','=','sub_category.category_id')
        ->select('sub_category.*','category.name as category')
        ->orderBy('sub_category_id','desc')->paginate(5);
        return view('shop/SubCategoryManager',compact('sub_categories'));
    }

    public function subCategoryAddForm(){
        $categories = DB::table('category')->where('status', $this->STATUS["ACTIVE"])->get();
        return view('shop/AddSubCategory', compact('categories'));
    }

    public function subCategoryAdd(Request $request){
        $request->validate([
            'name'=>['unique:sub_category,name']
        ]);

        $data = $request->all();
        $sub_category = array(
            'name' => $data['name'],
            'category_id' => $data['category_id']
        );
        DB::table('sub_category')->insertGetId($sub_category);
        return redirect('/SubCategoryManager');
    }

    public function subCategoryEditForm(Request $request){
        $data = $request->all();
        $sub_category = DB::table('sub_category')->where('sub_category_id',$data['sub_category_id'])->first();
        $categories = DB::table('category')->where('status', $this->STATUS["ACTIVE"])->get();
        return view('shop/EditSubCategory',compact('sub_category', 'categories'));
    }

    public function subCategoryEdit(Request $request){
        $data = $request->all();
        $sub_category = array(
            'name' => $data['name'],
            'category_id' => $data['category_id']
        );
        DB::table('sub_category')->where('sub_category_id',$data['sub_category_id'])->update($sub_category);
        return redirect('/SubCategoryManager');
    }

    public function getCategoryHeader(){
        $product_sub_categories = DB::table('sub_category')
        ->join('category', 'sub_category.category_id', '=', 'category.category_id')
        ->where('category.name', $this->CATEGORY['PRODUCT'])->select("sub_category.*")->get();

        $accessory_sub_categories = DB::table('sub_category')
        ->join('category', 'sub_category.category_id', '=', 'category.category_id')
        ->where('category.name', $this->CATEGORY['ACCESSORY'])->select("sub_category.*")->get();

        $service_sub_categories = DB::table('sub_category')
        ->join('category', 'sub_category.category_id', '=', 'category.category_id')
        ->where('category.name', $this->CATEGORY['SERVICE'])->select("sub_category.*")->get();

        $category_headers = array(
            [
                "category" => $this->CATEGORY["PRODUCT"],
                "sub_categories" => $product_sub_categories
            ],

            [
                "category" => $this->CATEGORY["ACCESSORY"],
                "sub_categories" => $accessory_sub_categories
            ],

            [
                "category" => $this->CATEGORY["SERVICE"],
                "sub_categories" => $service_sub_categories
            ],
        );
        return $category_headers;
    }
}

?>
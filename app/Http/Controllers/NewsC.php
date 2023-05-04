<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsC extends Controller
{
    private $STATUS;
    private $CATEGORY;
    // constructor
    function __construct() {
        $this->STATUS = config("const.STATUS");
        $this->CATEGORY = config("const.CATEGORY");
    }

    public function news($news_id){
        $news = DB::table("news")->where('news_id', $news_id)->first();
        return view('shop/News',compact('news'));
    }

    public function newsManager(){
        $news = DB::table('news')->join('category','category.category_id','=','news.category_id')
        ->join('sub_category', 'sub_category.sub_category_id','=','news.sub_category_id')
        ->select("news.*","category.name as category","sub_category.name as sub_category")->orderBy('news.news_id','desc')->paginate(4);
        return view('shop/NewsManager',compact('news'));
    }

    public function newsAddForm(){
        $categories = DB::table("category")->where('status', $this->STATUS["ACTIVE"])->get();
        return view('shop/AddNews', compact("categories"));
    }

    public function newsAdd(Request $request){
        $request->validate([
            'image' => ['required','image','mimes:jpg,png,jpeg,gif,svg','max:2048'],
        ]);
        $data = $request->all();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $str_rd = Str::random(20);
            $image->move(public_path("/images"),$str_rd.'.jpg');
            $str_rd = "/images/".$str_rd ;
            $news = array(
                'title' => $data['title'],
                'image' => $str_rd.'.jpg',
                'summary' => $data['summary'],
                'content' => $data['content'],
                'category_id' => $data['category_id'],
                'sub_category_id' => $data['sub_category_id']
            );
            DB::table('news')->insertGetId($news);
            return redirect('/NewsManager');
        }
    }

    public function newsEditForm(Request $request){
        $data = $request->all();
        $news = DB::table('news')->where('news_id',$data['news_id'])->first();
        $categories = DB::table('category')->where('status', $this->STATUS["ACTIVE"])->get();
        $sub_categories = DB::table('sub_category')->where('category_id', $news->category_id)->where('status', $this->STATUS["ACTIVE"])->get();
        return view('shop/EditNews',compact('news', 'categories', 'sub_categories'));
    }

    public function newsEdit(Request $request){
        $data = $request->all();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $str_rd = Str::random(20);
            $image->move(public_path("/images"),$str_rd.'.jpg');
            $str_rd = "/images/".$str_rd ;
            $news = array(
                'image' => $str_rd.'.jpg',
                'title' => $data['title'],
                'summary' => $data['summary'],
                'content' => $data['content'],
                'category_id' => $data['category_id'],
                'sub_category_id' => $data['sub_category_id']
            );
        }
        else{
            $news = array(
                'title' => $data['title'],
                'summary' => $data['summary'],
                'content' => $data['content'],
                'category_id' => $data['category_id'],
                'sub_category_id' => $data['sub_category_id']
            );
        }
        DB::table('news')->where('news_id',$data['news_id'])->update($news);
        return redirect('/NewsManager');
    }

    public function newsList($news_sub_category_id){
        if($news_sub_category_id==0) $news = DB::table('news')->orderBy('news_id','desc')->paginate(1);
        else{
            $news = DB::table('news')->where('sub_category_id', $news_sub_category_id)
            ->orderBy('news_id','desc')->paginate(6);
        }
        $hot_news = DB::table('news')->orderBy('news_id','desc')->take(4)->get();
        $news_sub_categories = DB::table('sub_category')->join('category','sub_category.category_id','=','category.category_id')
        ->where('category.name',$this->CATEGORY['NEWS'])->select("sub_category.*", "category.name as category")->get();
        return view('customer/NewsList',compact('news', 'hot_news', 'news_sub_categories', 'news_sub_category_id'));
    }

    // detail news
    public function newsDetail($news_id){
        $news = DB::table('news')->where('news_id',$news_id)->first();
        $hot_news = DB::table('news')->orderBy('news_id','desc')->take(4)->get();
        $sub_categories = DB::table('sub_category')->join('category','sub_category.category_id','=','category.category_id')
        ->where('category.name',$this->CATEGORY['NEWS'])->select("sub_category.*", "category.name as category")->get();
        return view('customer/NewsDetail',compact('news', 'hot_news', 'sub_categories'));
    }
}

?>
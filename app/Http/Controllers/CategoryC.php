<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CategoryC extends Controller
{

    public function categoryManager(){
        $categories = DB::table('category')->orderBy('category_id','desc')->paginate(5);
        return view('shop/CategoryManager',compact('categories'));
    }

    public function categoryAddForm(){
        return view('shop/AddCategory');
    }

    public function categoryAdd(Request $request){
        $request->validate([
            'name'=>['unique:category,name']
        ]);

        $data = $request->all();
        $category = array(
            'name' => $data['name']
        );
        DB::table('category')->insertGetId($category);
        return redirect('/CategoryManager');
    }

    public function categoryEditForm(Request $request){
        $data = $request->all();
        $category = DB::table('category')->where('category_id',$data['category_id'])->first();
        return view('shop/EditCategory',compact('category'));
    }

    public function categoryEdit(Request $request){
        $data = $request->all();
        $category = array(
            'name' => $data['name']
        );
        DB::table('category')->where('category_id',$data['category_id'])->update($category);
        return redirect('/CategoryManager');
    }
}

?>
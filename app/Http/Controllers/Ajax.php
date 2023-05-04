<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Ajax extends Controller
{
    private $STATUS;
    private $CATEGORY;
    // constructor
    function __construct() {
        $this->STATUS = config("const.STATUS");
        $this->CATEGORY = config("const.CATEGORY");
    }

    public function getSubcategoryByCategory(Request $request){
        $data = $request->all();
        $sub_categories = DB::table('sub_category')->where('category_id', $data['category_id'])->where('status', $this->STATUS["ACTIVE"])->get();
        return $sub_categories;
    }

    public function changeStatus(Request $request){
        $data = $request->all();
        DB::table($data['table'])->where($data['idColumnName'],$data['id'])->update(['status' => $data['status']]);
    }

}

?>
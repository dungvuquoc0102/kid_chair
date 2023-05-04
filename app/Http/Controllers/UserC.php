<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class UserC extends Controller
{
    private $STATUS;
    // constructor
    function __construct() {
        $this->STATUS = config("const.STATUS");
    }

    public function signIn(){
        if(Session::has("user_id")){
            return redirect('/ProductManager');
        }
        else return view('together/SignIn');
    }

    public function checkSignIn(Request $request){
        $data = $request->all();
        $newdata = DB::table('user')->where([
            ['username',$data['username']],
            ['password',md5($data['password'])]
        ])->get();
        
        if($newdata->count()!=0) {
            if(strcmp($newdata[0]->status, $this->STATUS["INACTIVE"])==0) {
                Session::put('login_mess',"Tài khoản đang bị khóa");
                return redirect('/SignIn');
            }
            Session::put('user_id',$newdata[0]->user_id);
            Session::put('username',$newdata[0]->username);
            Session::put('password',$newdata[0]->password);
            return redirect('/ProductManager');
        }
        else {
            Session::put('login_mess',"Thông tin tài khoản hoặc mật khẩu không chính xác");
            return redirect('/SignIn');
        }
    }
    

    public function changePassForm(){
        return view('together/ChangePass');
    }

    public function changePass(Request $request){
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });
        $request->validate([
            'new_pass'=>['required','max:30','min:5','without_spaces']
        ]);
        $data = $request->all();
        $newpass = $data['new_pass'];
        DB::table('user')->where('username',Session::get('username'))->update([
            'password' => md5($newpass)
        ]);
        Session::flush();
        Session::put('login_mess',"Thay đổi mật khẩu thành công");
        return redirect('/SignIn');
    }

    public function signOut(){
        Session::flush();
        return redirect('/SignIn');
    }

}

?>
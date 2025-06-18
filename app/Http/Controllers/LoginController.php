<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member_one;

class LoginController extends Controller
{
   
    public function index()
    {   
       //if (session()->get("rank")!=1) return redirect("/");

      return view('login_one.index');
    }

    public function cheak(){
        $uid = request('uid');
        $pwd = request('pwd');
        
        $row = Member_one::where('uid','=',$uid)->where('pwd','=',$pwd)->first();

    if($row){
        session()->put('uid',$row->uid);
        session()->put('rank',$row->rank);
        session()->put('name',$row->name);
        session()->put('id',$row->id);


    }else{
        return redirect()->back()->with('error', '아이디와 비밀번호를 다시 입력해 주세요.');
    }
    

    return redirect('order_one');

    

    }
    
    public function logout(Request $request){



        session()->forget('uid');
        session()->forget('rank');
        session()->forget('name');
        session()->forget('id');


            return redirect('/order_one');
        
    }

    public function ad_cheak(){
        if(session('rank') == 1){
            return redirect('/main_one');
        }else{
            return redirect('/order_one');
        }
    }
}



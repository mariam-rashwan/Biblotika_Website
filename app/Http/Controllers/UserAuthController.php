<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function login(){
        return view('login',["style"=>'log-in']);
    }

    public function register(){
        return view('register',["style"=>'sign-up']);
    }

    public function check(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]);
    $user=users::where("email","=",$request->email)->first();
    
        if($user)
        {
        if(Hash::check($request->password,$user->password)){
            $request->session()->put("LoggedUser",$user->id);
            return redirect("/");
        }
        else {
            back()->with("fail","mail Or Password is not correct");
            return redirect("login");
        }
        }else 
        {
            back()->with("fail","User Dosen't Exist");
            return redirect("login");
        }
    }

    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
             'email'=>'required|email|unique:users',
             'password'=>'required|min:3',
             "phone"=>"required",
             "gender"=>'required'
        ]) ;
        $user=new users;
        $user->user_name=$request->name;
        $user->phone_number=$request->phone;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->gender=$request->gender;
        $query=$user->save();
      
        if($query){
            $request->session()->put("LoggedUser",$user->id);
            return redirect("/");

        }
        else{
              back()->with("fail","there's problem with registeration"); 
              return redirect("register");
        }
    }

    public function signout(){
        if(session()->has("LoggedUser"))
        {
             session()->pull("LoggedUser");
             return redirect("/");
        }
    }



}

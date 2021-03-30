<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;
use App\post;

Route::get('/', function () {
    return view('post.index');
});



/*Route::get('post', function () {
        $post = DB::table('posts')->get();
        return view('book.show',['post'=>$post]);
});*/

route::resource('post', postcontroller::class);

/*route::get('vvv',function(){
    return view('book.show');
});*/


Route::get('show_books',function(){
   // $post=post::all();
    $post = DB::select('select * from post_view');
    return view('post.show',['post'=>$post,'style'=>'books']);
   //return $post;
    
})->middleware('login')->name('show_book');

/*Route::get('sn', function () {
    return view('post.index');
});*/

Route::get('login', "UserAuthController@login")->middleware("AlreadyLogged");


Route::get('/register', "UserAuthController@register")->middleware("AlreadyLogged");

Route::post("check","UserAuthController@check")->name("auth.check");

Route::post('create', "UserAuthController@create")->name("auth.create");

Route::get("/",function(){
error_log(session()->has("LoggedUser"));
    return view("post.index",["style"=>'style']);
});

Route::get("signout","UserAuthController@signout");

Route::get("contact",function(){
    return view("contact",["style"=>"contactStyle"]);
});

Route::post("send_mail",function(Request $request){
    global $request;
 $request->validate([
     "name"=>"required",
     "email"=>"required|email",
     "phone"=>"required",
     "message"=>"required"
 ]);
 $from_name = "From".$request->name;
 $from_email="biblotika.website@gmail.com";
     Mail::send([], [], function($message) use ($from_name, $from_email,$request) {
         $message->to($from_email, $from_name)->subject('  biblotika mail test ')
         ->setBody($request->message);
       
         });
  
      return  back()->with("success","Thanks! from your contact");
        
 
 })->name("send_mail");
 
 Route::GET('search', 'postcontroller@search')->name("post.search");

 Route::get("about",function(){
    return view("about",["style"=>"about"]);
});

Route::get("audiobook",function(){
    return view("audiobook",["style"=>"audiobooks"]);
});






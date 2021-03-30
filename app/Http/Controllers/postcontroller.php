<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use DB;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$post=DB::select('select * from posts');
       // $post=post::all();
        return view('post.index',['style'=>'style']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

               $request->validate([
                    'book_name'=>'required',
                    'trade_type'=>'required',
                    'city'=>'required',
                    'phone_number'=>'required',
                    'book_img'=>'required',
                ]);
        
                $this->validate($request,[
                    'book_img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
                   ]);
        
                    $book_img = time().'.'.$request->book_img->extension();  
                    $request->book_img->move(public_path('img'), $book_img);
                    $book_name = request()->book_name;
                    $trade_type = request()->trade_type;
                    $city = request()->city;
                    $phone_number = request()->phone_number;
                    $book_type = request()->book_type;
                    $user_id = request()->user_id;
                   $post = post::create([
                    'book_name' => $book_name,
                    'trade_type' => $trade_type,
                    'city' => $city,
                    'phone_number' => $phone_number,
                    'book_type' => $book_type,
                    'book_img' => $book_img,
                    'user_id' => $user_id

            ]);

            return redirect('show_books');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $post=post::all();
        return redirect('show_books');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(post  $post)
    {
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
               $request->validate([

                    'book_name'=>'required',
                    'trade_type'=>'required',
                    'city'=>'required',
                    'phone_number'=>'required',
                    'book_img'=>'required',
                ]);
             $post->book_name = $request->input('book_name');
             $post->trade_type = $request->input('trade_type');
             $post->city = $request->input('city');
             $post->phone_number = $request->input('phone_number');

             if ($request->hasFile('book_img')){
                 $file = $request->file('book_img');
                 $extension = $file->getClientOriginalExtension();
                 $filename = time() . "." . $extension;
                 $file->move(public_path('img'),$filename);
                 $post->book_img = $filename;
             }
             
           $post->save();

           // $post->update($request->all());
           return redirect('show_books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect('show_books');
        
    }

    public function search(Request $request){
        $search =$request->input('search');
       /* $post=post::query()
        ->where('book_name', 'LIKE', "%{$search}%")
        ->orWhere('trade_type', 'LIKE', "%{$search}%")
        ->get();*/
        $post = DB::select('select * from post_view where book_name like '."\"%$search%\"" );
        return view('post.show', ['post'=>$post , 'style'=>'books']);
      // return $post;
    }
    
}

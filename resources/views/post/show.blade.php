@extends("layout.master")


@section("content")

    <div>
            <div class="head">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-7 col-6">
                            <h4>Books</h4>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-6">
                            <p><i class="fas fa-home"> </i><a href="" class="head_link"> Home </a> > books</p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="cards">
                <div class="container">
                    <div class="row">

                       @if(count($post)!=0)
                        <h3>Result Count: {{ count($post) }}</h3>
                        @foreach($post as $p)
                         
                        <div class="card1 offset-xl-0 col-xl-4 offset-lg-0 col-lg-4 offset-md-0 col-md-6 offset-sm-0 col-sm-12 offset-1 col-10">
                            <div class="container">
                                <div class="row prof_name">
                                   
                                    <img class="prof_img col-3" src="{{asset('img/img.png')}}">
                                    <p class="prof_p col-9">{{$p->user_name}}</p>
                                </div>
                                <img src="img/{{$p->book_img}}" class="book_img">
                                <p class="p_cardinfo">{{$p->book_name}} <br><span> => {{$p->trade_type }}</span></p>
                                <div class="row">
                                    <p class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-3"><i class="fas fa-map-marker-alt"></i> {{$p->city}} </p>
                                    <p class="col-xl-5 col-lg-5 col-md-5 col-sm-4 col-6"><i class="fas fa-phone"></i> {{$p->phone_number}}</p>
                                </div>
                                <div class="row">
                                 
                                @if($p->user_id==Session::get('LoggedUser'))
                                <form action="{{route('post.destroy',$p->id)}}" method="POST">
                        
                                    <button class="btn-card col-xl-5 col-lg-5 col-md-5 col-sm-3 col-3"><a href="{{route('post.edit',$p->id)}}" class="btn_a">Update</a></button>
                    
                                        @csrf
                                        @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn_input offset-xl-1 col-xl-5 offset-lg-1 col-lg-5 offset-md-1 col-md-5 offset-sm-1 col-sm-3 offset-1 col-3">
                                </form>
                                @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
               </div>
               @else
                 <div class="container " style="margin-bottom:2.3%;">
                    <h1 colspan="4" class="text-center p-5 m-5" >Result not found....</h1>
                     <br><br>
                    </div>
               
            @endif 
             </div>


        </div>


        @endsection
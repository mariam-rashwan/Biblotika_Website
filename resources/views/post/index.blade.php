@extends("layout.master")


@section("content")
    <div class="home-page-first-div">   
        <div class="home-page-first-div-cover">
        </div>
        <div class="home-page-first-div-slide float-container">
            <div class="home-page-first-div-slide-text">
                <h1 class="first-text">the more that you <b class="first-bold">READ</b></h1>
                <p class="second-text">the more things you will <b class="first-bold">KNOW</b></p>
                <p class="third-text">the more that you <b class="first-bold">LEARN</b></p>
                <p class="fouth-text">the more places that you'll <b class="first-bold">GO</b></p>
            </div>
            <div class="triangle"></div>
        </div>
    </div>
    <div class="home-page-second-div">

        <div class="alert alert-info col-lg-9 col-md-8  col-sm-9 home-page-alert offset-6" >
            <center>
            <p><strong>ATTENTION!!!</strong> Buy your book or exchange it and get another one to read>>>></p>  
            @if (Session::get('LoggedUser')) 
            <button class="text text-light home-page-second-div-button1"><b><a href="{{route('post.create')}}" class="upload-link text text-light">upload a book</a></b></button><br>
            @else
            <button class="text text-light home-page-second-div-button1"><b><a href="login" class="upload-link text text-light">Login To upload a book</a></b></button><br>
            @endif
        </center>
        </div>

    
    </div>
    <center>
        <div class="home-page-third-div">
    <div class="card-group col-10 flex-sm-column flex-md-row ">
        <div class="card card-home-page-1">
            <div class="card-body">
                <center>
                    <a href="love.html"><i class="far fa-heart card-home-page-icon"></i></a><br><br>
                    <h2 class="text-secondary">love & romance</h2><br><br>
                </center>
            </div>
        </div>
        <div class="card card-home-page-2">
            <div class="card-body">
                <center>
                    <a href="food.html"><i class="fas fa-utensils card-home-page-icon"></i></a><br><br>
                    <h2 class="text-secondary">food & cooking</h2><br><br>
                </center>
            </div>
        </div>
        <div class="card card-home-page-1">
            <div class="card-body">
                <center>
                   <a href="computer.html"><i class="fas fa-laptop card-home-page-icon"></i></a> <br><br>
                    <h2 class="text-secondary">computer</h2><br><br>
                </center>
            </div>
        </div>
        <div class="card card-home-page-2">
            <div class="card-body">
                <center>
                   <a href="business.html"><i class="far fa-handshake card-home-page-icon"></i></a> <br><br>
                    <h2 class="text-secondary">business</h2>
                </center>
            </div>
        </div>
    </div>
    <br><br>
    <h1 class="home-page-fourth-div-text offset-1 ">Latest news</h1>
</center>
</div>

<div class="home-page-fourth-div container d-flex justify-content-around">
        <a href="https://www.qries.com/"><img src="img/novel1.jpg" alt="" class="rounded mx-auto d-inline" style="height: 300px; width: 200px;"></a>
       <a href="https://www.qries.com/"><img src="img/novel2.jpg" alt="" class="rounded mx-auto d-inline" style="height: 300px; width: 200px;"></a>
        <a href="https://www.qries.com/"><img src="img/novel3.jpg" alt="" class="rounded mx-auto d-inline" style="height: 300px; width: 200px;"></a>
    </div>
</div>
<div class="home-page-fifth-div"></div>

@endsection
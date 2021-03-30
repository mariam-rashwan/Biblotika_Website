<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
    <title>Biblotika</title>
</head>
<body>
    <header>
        <a href="" class="offset-9 header-s">Register</a>
        <a href="" class="header-l">Log in</a>
    </header>
    <div class="pos-f-t">
        <div class="collapse" style="transition: .9s;" id="navbarToggleExternalContent">
          <div class="p-4" style="background-color: #3FA0B2;">
            <ul class="navbar-nav offset-xl-3 offset-lg-1 ">
                <li class="nav-item"><a href="{{route('post.index')}}" class="nav-link text-light ">HOME</a></li>
                <li class="nav-item"><a href="" class="nav-link  text-light">BOOKS</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light ">AUDIOBOOKS</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">ABOUT</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">CONTACT</a></li>
            </ul> 
            <a href="" class=" offset-sm-2 offset-md-3"><i class="fa fa-cart-plus nav-icon-collapsed" style="color: white; font-size: 30px;"></i></a>
            <a href=""><i class="fa fa-heart nav-icon-collapsed offset-md-3 offset-sm-2" style="color: white; font-size: 30px;"></i></a>
            <a href=""><i class="fa fa-search nav-icon-collapsed offset-md-3 offset-sm-2" style="color: white; font-size: 30px;"></i></a>
          </div>
        </div>
    <nav class="navbar navbar-expand-lg" style="background-color: #358a99 ;">
        <i class="fa fa-book-reader  offset-2 offset-lg-1" style="color: white; font-size: 30px;"></i>
<a href="" class="navbar-brand text-light "><b class="brand-b" style="font-size: 35px; ">B</b>iblotika</a>
<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-book" style="font-size: 30px; color:#358a99 ;"></i></span>
  </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav offset-xl-3 offset-lg-1 ">
            <li class="nav-item"><a href="{{route('post.index')}}" class="nav-link text-light ">HOME</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">BOOKS</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">AUDIOBOOKS</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">ABOUT</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">CONTACT</a></li>
        </ul> 
        <a href="" class=" offset-0"><i class="fa fa-cart-plus nav-icon" style="color: white; font-size: 30px;"></i></a>
        <a href=""><i class="fa fa-heart nav-icon" style="color: white; font-size: 30px;"></i></a>
        <a href=""><i class="fa fa-search nav-icon" style="color: white; font-size: 30px;"></i></a>
        </div>  
    </nav>

    <br><br><br><br>
    <center>
    <ul >
            @foreach ($errors->all() as $error)
                    <li class="text text-danger" style="font-size:30px;">{{$error}}</li>
            @endforeach
        </ul>
    <div class="about-page-second-div bg-light">

        <form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')
            <div class="form-head " style="background-color: #358a99; color: white;">
                <center><h4 class="text text-light">Update your book</h4></center>
            </div>
            <br><br>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Book name :</label>
                <input type="text" class="form-control" placeholder="Book Name" name="book_name" value="{{$post->book_name}}">
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Type :</label>
                <input type="text" class="form-control" placeholder="exchange / Sell (for how much?)" name="trade_type" value="{{$post->trade_type}}">
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Your location :</label>
                <input type="text" class="form-control" placeholder="Cairo / Alexandria" name="city" value="{{$post->city}}">
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Your Phone number :</label>
                <input type="number" class="form-control" placeholder="0112848877002" name="phone_number" value="{{$post->phone_number}}">
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Book category :</label>
                <select class="form-select" name="book_type" value="{{$post->book_type}}">
                    <option value="">Choose your Book category --</option>
                    <option value="love & romance">love & romance</option>
                    <option value="food & cooking">food & cooking</option>
                    <option value="computer">computer</option>
                    <option value="business">business</option>
                </select>
            </div>

            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Upload book pic :</label>
                
                <input type="file" class="form-control-file" name="book_img" value="{{$post->book_img}}">
            </div>

            <div class="btn col-10 ">
                <button class="btn  form-button col-12" style="background-color: #358a99; color: white;">
                     <input type="submit" value="Update NOW" style="background-color: #358a99; color: white;border:none;">
                </button>
            </div>
            <input type="hidden" name="user_id" value="{{Session::get('LoggedUser')}}">
        </form>
    </div>
</center>
<br><br><br><br><br>

    <footer>
        <p class="" style="text-align:center; color:white; height: 70px; background-color: #358a99; font-size: 30px;position:fixed;margin-bottom: 0px;    bottom: 0px;
        left: 0px;
        right: 0px;"> @copyrights</p>

        </footer>
</body>
</html>
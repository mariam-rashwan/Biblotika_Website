<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Biblotika</title>
</head>
<body>
<header>
        <a href="sign-up.html" class="offset-9 header-s">Register</a>
        <a href="log-in.html" class="header-l">Log in</a>
    </header>
    <div class="pos-f-t">
        <div class="collapse" style="transition: .9s;" id="navbarToggleExternalContent">
          <div class="p-4" style="background-color: #3FA0B2;">
            <ul class="navbar-nav offset-xl-3 offset-lg-1 ">
                <li class="nav-item"><a href="{{route('book.index')}}" class="nav-link home-page-nav-item ">HOME</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">BOOKS</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light">AUDIOBOOKS</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light">ABOUT</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light">CONTACT</a></li>
            </ul> 
            <a href="" class=" offset-sm-2 offset-md-3"><i class="fa fa-cart-plus nav-icon-collapsed" style="color: white; font-size: 30px;"></i></a>
            <a href=""><i class="fa fa-heart nav-icon-collapsed offset-md-3 offset-sm-2" style="color: white; font-size: 30px;"></i></a>
            <a href=""><i class="fa fa-search nav-icon-collapsed offset-md-3 offset-sm-2" style="color: white; font-size: 30px;"></i></a>
          </div>
    </div>
    <nav class="navbar navbar-expand-lg" style="background-color: #358a99 ;">
        <i class="fa fa-book-reader  offset-2 offset-lg-1" style="color: white; font-size: 30px;"></i>
<a href="index.html" class="navbar-brand text-light "><b class="brand-b" style="font-size: 35px; ">B</b>iblotika</a>
<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-book" style="font-size: 30px; color:#358a99 ;"></i></span>
  </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav offset-xl-3 offset-lg-1 ">
            <li class="nav-item"><a href="{{route('book.index')}}" class="nav-link home-page-nav-item ">HOME</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">BOOKS</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light">AUDIOBOOKS</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light">ABOUT</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-light">CONTACT</a></li>
        </ul> 
        <a href="" class=" offset-0"><i class="fa fa-cart-plus nav-icon" style="color: white; font-size: 30px;"></i></a>
        <a href=""><i class="fa fa-heart nav-icon" style="color: white; font-size: 30px;"></i></a>
        <a href=""><i class="fa fa-search nav-icon" style="color: white; font-size: 30px;"></i></a>
        </div>  
    </nav>
</body>
</html>
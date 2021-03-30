@extends("layout.master");



@section("content")

<br><br><br><br>
    <center>
    <div class="about-page-second-div bg-light">
        <form action="{{route('auth.check')}}" method="post">
        @csrf
            <div class="form-head " style="background-color: #358a99; color: white;">
                <center><h4 class="text text-light">Log-in</h4></center>
            </div>
            <br><br>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">User name :</label>
                <input type="text" class="form-control" placeholder="Email" name="email" value="{{@old('email')}}">
              <div class="text text-danger">@error("email") {{$message}} @enderror</div>
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Password :</label>
                <input type="text" class="form-control" placeholder="password" name="password" value="{{@old('password')}}">
                <div class="text text-danger">@error("password") {{$message}} @enderror</div>
            </div>
            <a href="register">Create New Account</a>
            <div class="btn col-10 ">
                <button class="btn  form-button col-12" style="background-color: #358a99; color: white;">Log-in</button>
            </div>
        </form>
    </div>
</center>
<br><br><br><br><br>

@endsection
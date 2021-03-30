@extends("layout.master");



@section("content")
<br><br><br><br>
<center>
    <div class="about-page-second-div bg-light">
        <form action="{{route('auth.create')}}" method="post">
            @csrf
            <div class="form-head " style="background-color: #358a99; color: white;">
                <center>
                    <h4 class="text text-light">Register</h4>
                </center>
            </div>
            <br><br>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">User name :</label>
                <input type="text" class="form-control" placeholder="Name" name="name" value="{{@old('name')}}">
                <div class="text text-danger">@error("name") {{$message}} @enderror</div>
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Password :</label>
                <input type="text" class="form-control" placeholder="password" name="password" value="{{@old('password')}}">
                <div class="text text-danger">@error("password") {{$message}} @enderror</div>
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Your Phone number :</label>
                <input type="text" class="form-control" placeholder="01128484558770" name="phone" value="{{@old('phone')}}">
                <div class="text text-danger">@error("phone") {{$message}} @enderror</div>
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Your E-mail :</label>
                <input type="email" class="form-control" placeholder="akazoma@ymail.com" name="email" value="{{@old('email')}}">
                <div class="text text-danger">@error("email") {{$message}} @enderror</div>
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Gender :</label>
                <select class="form-select" name="gender" value="{{@old('gender')}}">
                    <option value="">Choose your Gender --</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <div class="text text-danger">@error("gender") {{$message}} @enderror</div>
            </div>

            <!-- <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Upload your pic :</label>
                
                <input type="file" class="form-control-file">
            </div>
            <div class="form-group col-10 ">
                <label for="" class="form-label float-start">Message for us :</label>
                <textarea type="text" class="form-control" placeholder="Message"></textarea>
            </div> -->
            <a href="login">You Have Already Account</a>

            <div class="btn col-10 ">
                <button class="btn  form-button col-12" style="background-color: #358a99; color: white;">Register</button>
            </div>
        </form>
    </div>
</center>
<br><br><br><br><br>
@endsection
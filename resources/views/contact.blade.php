@extends("layout.master")


@section("content")

<div class="contact-container container">
    <div class="contact_header">
            <h3 class="title">Contact</h3>
            <p class="path">
                <i class="fas fa-home home_icon"></i> 
                <a href="index.html">Home</a>
                <i class="fas fa-angle-double-right arrow_icon"></i>
                <a href="#">Contact</a>
            </p>
           
    </div>
    
    <div class="contact_form w-75 m-auto">
        <form action="{{route('send_mail')}}" method="post">
        @csrf
        @if(session()->has("success"))
<div class="alert alert-success">{{session()->get("success")}}</div>

        @endif
            <div class="form-group">
                <label for="" >Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{@old('name')}}">
                <div class="text text-danger">@error("name") {{$message}} @enderror</div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" placeholder="Enter Your Email" name="email" value="{{@old('email')}}">
                <div class="text text-danger">@error("email") {{$message}} @enderror</div>
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" placeholder="Enter Your Phone" name="phone" value="{{@old('phone')}}">
                <div class="text text-danger">@error("phone") {{$message}} @enderror</div>
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea type="text" class="form-control" placeholder="Enter Your Message" rows="3" name="message" value="{{@old('message')}}"></textarea>
                <div class="text text-danger">@error("message") {{$message}} @enderror</div>
            </div>
            <button>Send Message</button>
        </form>
    </div>

     <!-- google maps -->
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1726.4546751344076!2d31.02023729273096!3d30.068132787360412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585ba3024b8275%3A0x9fbd976cf0e573b1!2sSmart%20Villages%20Development%20and%20Management%20Company!5e0!3m2!1sen!2seg!4v1615998434482!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="google_map"></iframe>
     <!-- end of google maps  -->
    
</div>


@endsection
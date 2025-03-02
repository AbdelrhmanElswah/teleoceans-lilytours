@extends('Front.partials._layout')
@section('content')


    <div class="breadcrumb breadcrumb-style-one" style="background: url('{{asset('assets/images/pyramids/2.jpg')}}') no-repeat center;">
        <div class="container">
            <div class="col-lg-12 text-center" style="padding:150px 0;text-shadow: 2px 2px rgba(0, 0, 0, 0.4);">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact-wrapper pt-100">
        <div class="container">
            <div class="row align-items-center justify-content-lg-center gy-5">
                <div class="col-lg-6">
                    <div class="contatc-intro-figure">
                        <img src="assets/images/banner/contact-bg.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3>Contact Info.</h3>
                        <ul>
                        <li>
    <h6>Let’s Talk</h6>
    <ul>
        <li><i class="bi bi-telephone-x"></i> <a href="tel:+201111130723">+201111130723</a></li>
        <li><i class="bi bi-envelope-open"></i> <a href="mailto:Info@lillytour.com">Info@lillytour.com</a></li>
    </ul>
</li>
<li>
    <h6>Location.</h6>
    <p style="font-weight: bold;">139 C Menes St., Hadayek Al Ahram, Al Haram, Giza</p>
</li>
                            <li>
    <h6>Visit Us.</h6>
    <ul>
    <li><a href="https://www.facebook.com/profile.php?id=100088834734536&sk=about" target="_blank">Facebook</a></li>
    <li><a href="https://www.instagram.com/lillytours.egypt/profilecard/?igsh=MTJ1ejVoMG9xYmJ5" target="_blank">Instagram</a></li>
    <li><a href="https://x.com/LillyTour" target="_blank">Twitter</a></li>
    <li><a href="https://www.youtube.com/@LillyTour" target="_blank">YouTube</a></li>
    <li><a href="https://www.google.com/maps?daddr=29.9808410,31.1436830&saddr=30.0089421,31.3128896&dirflg=d&geocode=FW7myQEd-svdAQ%3D%3D;Fal4yQEdAzfbAQ%3D%3D&lucs=,94242484,94224825,94227247,94227248,47071704,47069508,94218641,94203019,47084304,94208458,94208447&g_ep=CAISDTYuMTQwLjAuOTEzNzAYACC6twsqYyw5NDI0MjQ4NCw5NDIyNDgyNSw5NDIyNzI0Nyw5NDIyNzI0OCw0NzA3MTcwNCw0NzA2OTUwOCw5NDIxODY0MSw5NDIwMzAxOSw0NzA4NDMwNCw5NDIwODQ1OCw5NDIwODQ0N0ICRUc%3D&g_st=iw" target="_blank">Location</a></li>
</ul>
</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 ">
            <div class="contact-map mt-120">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="{{isset($contact->map_location) ? $contact->map_location : ''}}"></iframe><a href="https://123movies-to.org/"></a><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-120 pb-4">
            <form action="{{route('contact-us.message')}}" method="post" id="contact_form">
                @csrf
                <div class="contact-form-wrap">
                    <h4>Get a free Keystroke quote now</h4>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            @foreach($errors->all() as $error)
                                {{ $error }}<br/>
                            @endforeach
                        </div>
                    @endif

                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Your name" id="name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="Your Email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="custom-input-group">
                        <textarea cols="20" rows="7" name="message" placeholder="Your message" required></textarea>
                    </div>
                    <div class="custom-input-group">
                        <div class="submite-btn">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection

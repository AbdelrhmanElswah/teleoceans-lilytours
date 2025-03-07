@extends('Front.partials._layout')

@section('content')


    <div class="hero-area hero-style-four" style="height: 820px">
        <img src="{{ asset('assets/images/banner/banner-plane.svg') }}" class="img-fluid banner-plane">
        <img src="{{ asset('assets/images/banner/banner-star1.svg') }}" class="banner-star1" alt="">
        <img src="{{ asset('assets/images/banner/banner-star2.svg') }}" class="banner-star2" alt="">
        <img src="{{ asset('assets/images/banner/banner-star3.svg') }}" class="banner-star3" alt="">

        <div class="hero-main-wrapper position-relative" style="text-shadow: 2px 2px rgba(0, 0, 0, 0.4);">
            <div class="swiper hero-slider-four">
                <div class="swiper-wrapper">
                    @forelse ($sliders as $slider)
                        <div class="swiper-slide">
                            <div class="slider-bg-1" style="background-image: url('{{ asset('images/sliders/' . $slider->image) }}')">
                                <div class="container">
                                    <div class="row d-flex justify-content-lg-start justify-content-center align-items-center">
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="hero4-content">
                                                <h1>{{ $slider->title }}</h1>
                                                <p>{!! $slider->description !!}</p>
                                                <a href="{{ $slider->link }}" class="button-fill-primary banner3-btn" target="_blank">{{ $slider->button_text }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- Default Slider Content if no sliders exist -->
                        <div class="swiper-slide">
                            <div class="slider-bg-1">
                                <div class="container">
                                    <div class="row d-flex justify-content-lg-start justify-content-center align-items-center">
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="hero4-content">
                                                <h1>LET’S YOUR JOURNEY BEGIN WITH TRAVELLAB</h1>
                                                <p>A charitable organization or charity is an organization whose primary objectives are philanthropy.</p>
                                                <a href="#" class="button-fill-primary banner3-btn">View Adventures</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-bg-2">
                                <div class="container">
                                    <div class="row d-flex justify-content-lg-start justify-content-center align-items-center">
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="hero4-content">
                                                <h1>ENJOY YOUR HOLIDAYS WITH TRAVELLAB</h1>
                                                <p>A charitable organization or charity is an organization whose primary objectives are philanthropy.</p>
                                                <a href="#" class="button-fill-primary banner3-btn">View Adventures</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
                <div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide">
                    <i class="bi bi-arrow-left"></i>
                </div>
                <div class="hero-next3" tabindex="0" role="button" aria-label="Next slide">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="package-area package-style-two pt-110 chain pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-10">
                    <div class="section-head-alpha text-center mx-auto">
                        <h2>WE OFFER EXCITING EGYPTIAN HOLIDAYS AND PACKAGES</h2>
                        <p>From guided tours to Egypt or family adventures to tailor-made holidays during Christmas & New Year, we are bound to have travel itinerary to Egypt that is perfect for you and which suits all budgets and travelers of all ages .</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                @foreach($programs as $program)
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="package-card-delta">
                        <div class="package-thumb">
                            <a href="{{route('details',$program->id)}}"><img style="height: 300px" src="{{asset('images/programs/'.$program->image)}}" alt=""></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>{{$program->duration}}</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{route('details',$program->id)}}">{{$program->name}}</a></h3>
                            <div class="p-card-bottom">
                                <div class="p-card-info">
                                    <span>From</span>
                                    <h6>{{$program->price}}$ <span>Per Person</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="package-page-btn text-center mt-60">

            </div>
        </div>
    </div>






    <div class="upcoming-tour-area pt-110 pb-110 chain">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 d-flex justify-content-lg-start justify-content-center">
                    <div class="section-head-alpha text-lg-start text-center">
                        <h2 class="text-white">Latest Packages</h2>

                    </div>
                </div>
                <div class="col-lg-7 d-flex justify-content-lg-end justify-content-center">
                    <div class="slider-arrows text-center d-lg-flex flex-row justify-content-center d-none gap-5">
                        <div class="testi-prev4" tabindex="0" role="button" aria-label="Previous slide"><i
                                class="bi bi-arrow-left"></i></div>
                        <div class="testi-next4" tabindex="0" role="button" aria-label="Next slide"><i
                                class="bi bi-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="swiper upcoming-tour">
                        <div class="swiper-wrapper">
                            @foreach($news as $new)
                            <div class="swiper-slide">
                                <div class="package-card-delta">
                                    <div class="package-thumb">
                                        <a href="{{route('details',$new->id)}}"><img style="height: 300px" src="{{asset('images/programs/'.$new->image)}}" alt=""></a>
                                        <p class="card-lavel">
                                            <i class="bi bi-clock"></i> <span>{{$new->duration}}</span>
                                        </p>
                                    </div>
                                    <div class="package-card-body">
                                        <h3 class="p-card-title"><a href="{{route('details',$new->id)}}">{{$new->name}}</a></h3>
                                        <div class="p-card-bottom">
                                            <div class="book-btn">
                                                <a href="{{route('details',$new->id)}}">Book Now <i
                                                        class='bx bxs-right-arrow-alt'></i></a>
                                            </div>
                                            <div class="p-card-info">
                                                <span>From</span>
                                                <h6>{{$new->price}}$ <span>Per Person</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center d-flex justify-content-center">
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>


    <div class="about-main-wrappper pt-100 pb-4">
        <div class="container">
            <div class="about-tab-wrapper">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="about-tab-image-grid text-center">
                            <div class="about-video d-inline-block">
                                <!-- Thumbnail Image -->
                                <img src="assets/images/about/6.jpeg" alt="Video Thumbnail" class="thumbnail" style="width: 400px; height: 300px;">

                                <!-- Overlay with Play Button -->
                                <div class="video-overlay">
                                    <!-- Fancybox video link -->
                                    <a data-fancybox href="assets/images/about/WhatsApp Video 2024-12-02 at 3.50.25 PM.mp4" class="play-icon video-popup">
                                        <i class="bi bi-play-fill"></i> <!-- Play Icon -->
                                    </a>
                                </div>
                            </div>
                            <div class="row float-images g-4" id="about">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-image">
                                        <img src="assets/images/about/1.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6" >
                                    <div class="about-image">
                                        <img src="assets/images/about/2.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-tab-wrap">
                            <h2 class="about-wrap-title">
                                About Our Company And <span>What We Are</span> Offer.
                            </h2>
                            <div class="about-tab-switcher">
                                <ul class="nav nav-pills mb-3 justify-content-md-between justify-content-center" id="about-tab-pills" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link active" id="pills-about1" data-bs-toggle="pill" data-bs-target="#about-pills1" role="tab" aria-controls="about-pills1" aria-selected="true">
                                            <h3>10</h3>
                                            <h6>Years Experience</h6>
                                        </div>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="pills-about2" data-bs-toggle="pill" data-bs-target="#about-pills2" role="tab" aria-controls="about-pills2" aria-selected="false">
                                            <h3>100+</h3>
                                            <h6>Tour Guide</h6>
                                        </div>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <div class="nav-link" id="pills-about3" data-bs-toggle="pill" data-bs-target="#about-pills3" role="tab" aria-controls="about-pills3" aria-selected="false">
                                            <h3>500+</h3>
                                            <h6>Travelar Connect</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content about-tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="about-pills1" role="tabpanel" aria-labelledby="pills-about1">
                                    <p>At Lilly Tours, we provide a variety of meticulously designed tour packages to suit every traveler's interest and needs:</p>
                                    <ul>
                                        <li><strong>Pharaonic Landmark Tours:</strong> Step into history with visits to iconic sites such as the Pyramids of Giza, the Sphinx, Karnak Temple, and the Valley of the Kings.</li>
                                        <li><strong>Cultural and Historical Adventures:</strong> Explore ancient Alexandria, marvel at the temples of Luxor and Aswan, and experience the grandeur of Abu Simbel.</li>
                                        <li><strong>Customized Itineraries:</strong> Personalize your journey with tailored packages that include Nile cruises, desert safaris, and unique cultural experiences.</li>
                                        <li><strong>All-Inclusive Packages:</strong> Enjoy worry-free travel with comprehensive services, including transportation, accommodations, guided tours, and more.</li>
                                        <li><strong>Expert Multilingual Guides:</strong> Our experienced guides bring Egypt’s history to life, offering tours in multiple languages for your convenience.</li>
                                    </ul>
                                    <p>Whether you're seeking to explore ancient ruins, relax along the Nile, or immerse yourself in the vibrant culture of modern Egypt, Lilly Tours promises an experience filled with discovery, wonder, and lasting memories.</p>
                                </div>

                                <div class="tab-pane fade" id="about-pills2" role="tabpanel" aria-labelledby="pills-about2">
                                    <p> Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc eget consente
                                        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
                                        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit.</p>
                                </div>
                                <div class="tab-pane fade" id="about-pills3" role="tabpanel" aria-labelledby="pills-about3">
                                    <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc eget consente
                                        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
                                        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
                                        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
                                        consectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-100 align-items-center">
                <div class="col-lg-6">
                    <div class="achievement-counter-wrap">
                        <h2 class="about-wrap-title">
                            Why Lilly
                            <span>Tours Egypt?</span>
                        </h2>
                        <div class="achievement-counter-cards">
                            <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center ">
                                <div class="counter-box mb-sm-0 mb-3">
                                    <h2>100+</h2>
                                    <h6>Awesome Tour</h6>
                                </div>
                                <p class="achievement-text mb-0 px-3" style="font-size: 1.125rem; line-height: 1.6; color: #333;">
                                    Explore Egypt like never before with Lilly Tours! Choose from over 100 thoughtfully curated tour packages that take you to Egypt's most iconic landmarks, breathtaking sights, and hidden gems. Your unforgettable journey awaits.
                                </p>
                            </div>
                            <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
                                <div class="counter-box mb-3">
                                    <h2>30+</h2>
                                    <h6>Destinations</h6>
                                </div>
                                <p  class="achievement-text mb-0 px-3" style="font-size: 1.125rem; line-height: 1.6; color: #333;">
                                    Discover the magic of Egypt with Lilly Tours!<br> We offer tours to over 30 incredible destinations, including Cairo, Luxor, Aswan, Hurghada, Sharm El Sheikh, Dahab, Siwa, Wahat, Fayoum, Alexandria, and more. Explore the best of Egypt's history, culture, and natural wonders!</p>
                            </div>
                            <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
                                <div class="counter-box mb-3">
                                    <h2>25+</h2>
                                    <h6> Excursions </h6>
                                </div>
                                <p class="achievement-text mb-0 px-3" style="font-size: 1.125rem; line-height: 1.6; color: #333;">
                                    Experience the best of Egypt with Lilly Tours! Choose from over 25 exciting excursion tours, taking you on unforgettable journeys to explore Egypt's ancient history, vibrant culture, and stunning landscapes. Adventure awaits!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row float-images g-4" id="about">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-image">
                                <img src="assets/images/about/3.jpeg" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-image">
                                <img src="assets/images/about/4.jpeg" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-image">
                                <img src="assets/images/about/5.jpeg" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-image">
                                <img src="assets/images/about/6.jpeg" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


@extends('Front.partials._layout')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <div class="breadcrumb breadcrumb-style-one" style="background: url('{{asset('assets/images/pyramids/2.jpg')}}') no-repeat center;">
        <div class="container">
            <div class="col-lg-12 text-center" style="padding:150px 0;">
                <h2 class="breadcrumb-title">{{$program->name}}</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Package details</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="package-details-wrapper pt-76">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 pb-4">
                    <div class="tour-package-details">
                        <div class="pd-header">
                            <div class=" pd-top row row-cols-lg-4 row-cols-md-2 row-cols-2 gy-4">
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="{{asset('assets/images/icons/pd1.svg')}}" alt="">
                                        </div>
                                        <div class="info">
                                            <h6 style="font-weight: bold;">Duration</h6>
                                            <span style="font-weight: bold;">{{$program->duration}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="{{asset('assets/images/icons/pd2.svg')}}" alt="">
                                        </div>
                                        <div class="info">
                                            <h6 style="font-weight: bold;">Tour Type</h6>
                                            <span style="font-weight: bold;">{{$program->type}}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="{{asset('assets/images/icons/pd3.svg')}}" alt="">
                                        </div>
                                        <div class="info">
                                            <h6>Run Dayes</h6>
                                            <span>{{$program->run_dates}}</span>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col">
                                    <div class="pd-single-info">
                                        <div class="info-icon">
                                            <img src="{{asset('assets/images/icons/pd4.svg')}}" alt="">
                                        </div>
                                        <div class="info">
                                            <h6 style="font-weight: bold;">Price From</h6>
                                            <span style="font-weight: bold;">{{$program->price}}$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-thumb">
                                <!-- Swiper Slider -->
                                <div id="programMediaSlider" class="swiper mt-4">
                                    <div class="swiper-wrapper">
                                        <!-- Main Program Image -->
                                        <div class="swiper-slide">
                                            <img src="{{ asset('images/programs/'.$program->image) }}" class="d-block w-100" style="height: 500px" alt="Main Program Image">
                                        </div>

                                        <!-- Media Images -->
                                        @if($program->media && $program->media->count() > 0)
                                            @foreach($program->media as $mediaItem)
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('images/programs/media/' . $mediaItem->image) }}" class="d-block w-100" style="height: 500px" alt="Media Image">
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <!-- Navigation buttons -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>


                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location"><i class="bi bi-geo-alt"></i> {{$program->track}}</h5>
                                    <ul class="d-flex align-items-center rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                                <h2 class="pd-title">{{$program->name}}</h2>
                            </div>
                        </div>
                        <div class="package-details-tabs">
                            <ul class="nav nav-pills tab-switchers gap-xxl-3 gap-1" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-package1" data-bs-toggle="pill" data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1" aria-selected="true"><i style="margin-right: 2px"  class="bi bi-info-lg"></i> Includes & Excludes</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package2" data-bs-toggle="pill" data-bs-target="#pill-body2" type="button" role="tab" aria-controls="pill-body2" aria-selected="false"> <i   style="margin-right: 2px"  class="bi bi-file-earmark-spreadsheet"></i> Itinerary</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package3" data-bs-toggle="pill" data-bs-target="#pill-body3" type="button" role="tab" aria-controls="pill-body3" aria-selected="false"><i  style="margin-right: 2px"  class="bi bi-images"></i>Accommodation</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package5" data-bs-toggle="pill" data-bs-target="#pill-body5" type="button" role="tab" aria-controls="pill-body5" aria-selected="false"><i  style="margin-right: 2px"  class="bi bi-plus"></i>Optionals</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package4" data-bs-toggle="pill" data-bs-target="#pill-body4" type="button" role="tab" aria-controls="pill-body4" aria-selected="false"><i style="margin-right: 2px" class="fa fa-money"></i> Prices</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1" role="tabpanel" aria-labelledby="pills-package1">
                                    <h3 class="d-subtitle">Package Details</h3>
                                    <p>{!!$program->description!!}</p>
                                    <div id="overview" class="scroll_pane_new active" style="margin-top: 30px">

                                        <h3 style="margin-bottom: 15px">Includes</h3>
                                        <ul style="padding-left: 10px">
                                            @foreach($program->includes as $include)
                                            <li ><i class="bi bi-check-circle"></i> {{$include->name}}</li>
                                            @endforeach
                                        </ul>
                                        <h3 style="margin-bottom: 15px">Excludes</h3>
                                        <ul style="padding-left: 10px">
                                            @foreach($program->excludes as $exclude)
                                            <li style="font-size: 15px;"><i class="bi bi-arrow-down-right"></i>{{$exclude->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>                                    <table class="table package-info-table mb-0">
                                    </table>

                                </div>

                                <div class="tab-pane fade package-plan-tab tab-body mt-3" id="pill-body2" role="tabpanel" aria-labelledby="pills-package2">
                                    <h3 class="d-subtitle">Details</h3>
                                    <p>{!! $program->small_description !!}</p>
                                    <div class="accordion plans-accordion" id="planAccordion">
                                        @foreach($program->Itinerary as $index=>$itinerary)
                                            <div class="accordion-item plans-accordion-single">
                                                <div class="accordion-header" id="planHeadingOne">
                                                    <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#planCollapse1" aria-expanded="true" role="navigation">
                                                        <div class="paln-index-circle">
                                                            <h4>{{$index}}</h4>
                                                        </div>
                                                        <div class="plan-title">
                                                            <h5>{{$itinerary->title}}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="planCollapse1" class="accordion-collapse collapse show" aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                                                    <div class="accordion-body plan-info">
                                                        <p>{!! $itinerary->description !!}</p>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel" aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        @foreach($program->accommodation as $accommodation)
                                        <div class="col-md-6">
                                            <div class="blog-card-gamma">
                                                <div class="blog-thumb">
                                                    <a >
                                                        <img style="height: 300px" src="{{asset('images/Accommodation/'.$accommodation->image)}}" alt="">
                                                    </a>
                                                    <div class="blog-lavel">
                                                        <a >{{$accommodation->title}} , {{$accommodation->location}}</a>
                                                    </div>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-body-top">
                                                        <a href="{{$accommodation->tripadvisor_link}}" class="blog-writer"><i class=" fa fa-tripadvisor"></i>Tripadvisor </a>
                                                        <a  class="blog-comments"><i class="bi bi-calendar3"></i> {{$accommodation->created_at}}</a>
                                                    </div>
                                                    <h4 class="blog-title"><a> {!! $accommodation->description !!}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>



                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body5" role="tabpanel" aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        @foreach($program->Addon as $addon)
                                            <div class="col-md-6">
                                                <div class="blog-card-gamma">
                                                    <div class="blog-thumb">
                                                        <a >
                                                            <img style="height: 300px" src="{{asset('images/addons/'.$addon->image)}}" alt="">
                                                        </a>
                                                        <div class="blog-lavel">
                                                        <a>{{$addon->title}}, {{$addon->price}}$</a>
                                                        </div>
                                                    </div>
                                                    <div class="blog-content">
                                                        <div class="blog-body-top">
                                                        </div>
                                                        <h4 class="blog-title"><a> {!! $addon->description !!}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                                <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel" aria-labelledby="pills-package4">
                             {!! $program->price_details !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-sidebar">
                        <aside class="package-widget-style-2 widget-form mt-30">
                            <div class="widget-title text-center d-flex justify-content-between">
                                <h4>Book This Tour</h4>
                                </div>
                                <div class="widget-body">
    <form action="{{route('details.booking')}}" method="post" id="booking-form">
        @csrf
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @foreach($errors->all() as $error)
                    {{ $error }}<br/>
                @endforeach
            </div>
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        
        <div class="booking-form-wrapper">
            <div class="custom-input-group">
                <input type="text" name="name" placeholder="Your Full Name" id="name">
            </div>
            <div class="custom-input-group">
                <input type="email" name="email" placeholder="Your Email" id="email">
                <input type="hidden" name="program_id" value="{{$program->id}}">
            </div>
            <div class="custom-input-group">
                <input type="tel" name="number" placeholder="Phone" id="phone">
            </div>
            <div class="custom-input-group">
                <input type="text" name="promo_code" placeholder="Promo Code (if any)" id="promo_code">
            </div>
            <div class="custom-input-group">
                <textarea cols="20" rows="3" name="addons" placeholder="Enter Add-ons "></textarea>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="custom-input-group">
                        <input type="number" name="adult" placeholder="Adult" id="adult">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="custom-input-group">
                        <input type="number" name="child" placeholder="Child" id="child">
                    </div>
                </div>
            </div>
            <div class="custom-input-group">
                <i class="bi bi-calendar3"></i>
                <input placeholder="Select your date" type="text" name="date" id="datepicker2" value="" class="calendar">
            </div>
            <div class="custom-input-group">
                <textarea cols="20" rows="7" name="message" placeholder="Your message"></textarea>
            </div>
            <div class="custom-input-group">
                <div class="submite-btn">
                    <button type="submit">Book Now</button>
                </div>
            </div>
        </div>
    </form>
</div>

                
                        </aside>
                        <aside class="package-widget-style-2 widget-recent-package-entries mt-30">
                            <div class="widget-title text-center">
                                <h4>Package Suggest</h4>
                            </div>
                            <div class="widget-body">
                                <ul>
                                    @foreach($programs_suggest as $program_suggest)
                                    <li class="package-sm">
                                        <div class="thumb">
                                            <a href="{{route('details',$program_suggest->id)}}">
                                                <img src="{{asset('images/programs/'.$program_suggest->image)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h6><a >{{$program_suggest->name}}</a></h6>
                                            <div class="price">
                                                <span>From</span>
                                                <h6>{{$program_suggest->price}}$<span>Per Person</span></h6>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>


                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </div>




<script>
   
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 1,
            spaceBetween: 10,
        });
    });

</script>

@endsection

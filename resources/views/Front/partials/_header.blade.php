<div class="topbar-area topbar-style-two d-sm-flex d-none">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 d-md-flex d-none justify-content-start align-items-center">
                <div class="topbar-contact-left">
                <ul class="contact-list">
    <li><i class="bi bi-telephone-fill"></i> <a href="tel:+201111130723">+20 111-113-0723</a></li>
    <li><i class="bi bi-envelope-fill"></i> <a href="mailto:Info@lillytour.com"><span class="__cf_email__">Info@lillytour.com</span></a></li>
</ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 d-flex justify-content-md-end justify-content-center align-items-center">
                <ul class="topbar-social-links">
                    <li><a href="{{isset($contact->facebook) ? $contact->facebook : ''}}"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="{{isset($contact->instagram) ? $contact->instagram : ''}}"><i class='bx bxl-instagram-alt'></i></a></li>
                    <li><a href="{{isset($contact->twitter) ? $contact->twitter : ''}}"><i class='bx bxl-twitter'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header>
    <div class="header-area header-style-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                    <div class="nav-logo d-flex justify-content-between align-items-center">
                        <a href="/"><img src="{{asset('assets/images/111.1.png')}}" style=" height: 90px" alt="logo"></a>
                        <div class="d-flex align-items-center gap-4">
                            <div class="nav-right d-xl-none">
                                <!-- <ul class="nav-actions">
                                    <li class="category-toggle">
                                        <i class="bx bx-category"></i>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="mobile-menu d-flex ">
                                <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                    <span class="h-top"></span>
                                    <span class="h-middle"></span>
                                    <span class="h-bottom"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-xs-6">
                    <nav class="main-nav float-end">
                        <div class="inner-logo d-xl-none text-center">
                            <a href="#"><img src="assets/images/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            @foreach($categories as $category)
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">{{$category->name}}</a>
                                <i class="fl flaticon-plus">+</i>

                              {{--
                              <ul class="sub-menu">

                                  @foreach($category->subcategory as $s)
                                    <li><a href="{{route('packages',$s->name)}}">{{$s->name}}</a></li>
                                  @endforeach
                                </ul>
                              --}}
                              <ul class="sub-menu">
                                @foreach($category->sub_category as $s)
                                    <li><a href="{{route('packages',$s->id)}}">{{$s->name}}</a></li>
                                  @endforeach
                              </ul>
                            </li>
                            @endforeach
                                <li><a href="{{route('tailor')}}">Tailor Made</a></li>
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">More</a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="{{route('home','#about')}}">About Us</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                    <li><a href="{{route('blog')}}">Blogs</a></li>
                                    <li><a href="{{route('terms')}}">Terms & Conditions</a></li>
                                </ul>
                            </li>
                            <li></li>
                        </ul>
                        <div class="inner-contact-options d-xl-none">
                            <div class="contact-box-inner"><i class="bi bi-telephone-fill"></i> <a href="tel:+201111130723">+20 111-113-0723</a></div>
                            <div class="contact-box-inner"><i class="bi bi-envelope-fill"></i> <a href="mailto:Info@lillytour.com">Info@lillytour.com</a></div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
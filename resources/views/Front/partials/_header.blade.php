<div class="topbar-area topbar-style-two d-sm-flex d-none">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 d-md-flex d-none justify-content-start align-items-center">
                <div class="topbar-contact-left">
                    <ul class="contact-list">
                        <li><i class="bi bi-telephone-fill"></i> <a href="tel:{{isset($contact->number) ? $contact->number : ''}}">{{isset($contact->number) ? $contact->number : ''}}</a></li>
                        <li><i class="bi bi-envelope-fill"></i> <a href="mailto:{{isset($contact->email) ? $contact->email : ''}}"><span class="__cf_email__">{{isset($contact->email) ? $contact->email : ''}}</span></a></li>
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
<div class="main-searchbar-wrapper">
    <div class="container">
        <div class="multi-main-searchber">
            <div class="main-searchbar-close search-toggle">
                <i class="bi bi-x-lg"></i>
            </div>
            <form action="#" method="post" id="main_searchbar">
                <div class="row g-4">
                    <div class="col-lg-10">
                        <div class="row gx-0 gy-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="search-box-single destination-box">
                                    <div class="searchbox-icon ">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="searchbox-input">
                                        <label for="deatination_drop">Destination</label>
                                        <select data-placeholder="Where Are You Going?" id="deatination_drop">
                                            <option value="">Where Are You Going?</option>
                                            <optgroup label="India">
                                                <option>
                                                    Solt Lake
                                                </option>
                                                <option>
                                                    Kolkata
                                                </option>
                                                <option>
                                                    Mohamia
                                                </option>
                                                <option>
                                                    Mumbai
                                                </option>
                                                <option>
                                                    New Delhi
                                                </option>
                                            </optgroup>
                                            <optgroup label=" Bangladash">
                                                <option>
                                                    Cox's Bazer
                                                </option>
                                                <option>
                                                    Rangamati
                                                </option>
                                                <option>
                                                    Banderban
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="search-box-single type-box">
                                    <div class="searchbox-icon">
                                        <i class="bi bi-text-paragraph"></i>
                                    </div>
                                    <div class="searchbox-input">
                                        <label for="activity-dropdown">Travel Type</label>
                                        <select class="defult-select-drowpown" data-placeholder="All Activity" id="activity-dropdown">
                                            <option value="">All Activity</option>
                                            <option value="1">Type 1</option>
                                            <option value="2">Type 2</option>
                                            <option value="3">Type 3</option>
                                            <option value="4">Type 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="search-box-single type-box">
                                    <div class="searchbox-icon">
                                        <i class="bi bi-person-plus"></i>
                                    </div>
                                    <div class="searchbox-input">
                                        <label for="person-dropdown">Person</label>
                                        <select class="defult-select-drowpown" id="person-dropdown">
                                            <option selected value="0">01</option>
                                            <option value="1">02</option>
                                            <option value="2">03</option>
                                            <option value="3">04</option>
                                            <option value="4">05</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="search-box-single date-box">
                                    <div class="searchbox-icon">
                                        <i class="bi bi-capslock"></i>
                                    </div>
                                    <div class="searchbox-input date-picker-input">
                                        <label for="datepicker">When</label>
                                        <input placeholder="Select your date" type="text" name="checkIn" id="datepicker" value="" class="calendar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="main-form-submit">
                            <button type="submit">Find Now</button>
                        </div>
                    </div>
                </div>
            </form>
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
                                <ul class="nav-actions">
                                    <li class="category-toggle">
                                        <i class="bx bx-category"></i>
                                    </li>
                                    <li class="search-toggle">
                                        <i class="bx bx-search-alt"></i>
                                    </li>
                                </ul>
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
                                    <li><a href="{{route('faq')}}">FAQ</a></li>
                                </ul>
                            </li>
                            <li></li>
                        </ul>
                        <div class="inner-contact-options d-xl-none">
                            <div class="contact-box-inner"><i class="bi bi-telephone-fill"></i> <a href="tel:+17632275032">+1 763-227-5032</a></div>
                            <div class="contact-box-inner"><i class="bi bi-envelope-fill"></i> <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#0f666169604f6a776e627f636a216c6062"><span class="__cf_email__" data-cfemail="c0a9aea6af80a5b8a1adb0aca5eea3afad">[email&nbsp;protected]</span></a></div>
                        </div>
                    </nav>
                </div>
{{--                <div class="col-xl-2">--}}
{{--                    <div class="nav-right float-end d-xl-flex d-none ">--}}
{{--                        <ul class="nav-actions">--}}
{{--                            <li class="search-toggle">--}}
{{--                                <i class='bx bx-search-alt'></i>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</header>

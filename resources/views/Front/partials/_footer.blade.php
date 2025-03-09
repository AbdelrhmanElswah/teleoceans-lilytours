<div class="footer-area">
    <div class="footer-main-wrapper">
        <div class="footer-vactor">
            <img src="{{ asset('assets/images/banner/footer-bg.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-6">
                    <div class="footer-about text-lg-start text-center">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Contact Us</h4>
                            @if(session('successs'))
    <div class="alert alert-success">
        {{ session('successs') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                            <form id="newsletterForm" action="{{ route('subscribe') }}" method="POST" novalidate="novalidate" class="col-md-10">
    @csrf
    <div class="input-group">
        <input class="form-control" placeholder="Email Address" name="email" id="email" type="email" required>
        <span class="input-group-btn">
            <button class="btn btn-danger" style="padding-bottom: 14px" type="submit">Go!</button>
        </span>
    </div>
</form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Quick Link</h4>
                        <ul class="footer-links">
                            <li><a href="{{ route('home', '#about') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Tour Categories</h4>
                        <ul class="footer-links">
                            @foreach ($categories as $category)
                                <li><a>{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-contact-wrapper">
                <h5>Contact Us:</h5>
                <ul class="footer-contact-list">
                    <!-- رقم الهاتف -->
                    <li>
                        <i class="bi bi-telephone-x"></i>
                        <a href="tel:+201111130723">+201111130723</a>
                    </li>
                    <!-- البريد الإلكتروني -->
                    <li>
                        <i class="bi bi-envelope-open"></i>
                        <a href="mailto:Info@lillytour.com">
                            <span class="__cf_email__">Info@lillytour.com</span>
                        </a>
                    </li>
                    <!-- العنوان -->
                    <li>
                        <i class="bi bi-geo-alt"></i>
                        <a href="#">139 C Menes St., Hadayek Al Ahram, Al Haram, Giza</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-6 order-lg-1 order-3">
                    <div class="copyright-link text-lg-start text-center">
                        Copyrights 2024&copy; - All Rights Reserved - Powered By 
                        <a href="https://teleoceans.com" style="color: #fff">Teleoceans.com</a>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="footer-logo text-center">
                        <!-- يمكنك إضافة الشعار هنا إذا كان لديك -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                    <div class="policy-links">
                        <ul class="policy-list justify-content-lg-end justify-content-center">
                            <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
                            <li><a href="{{ route('terms') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
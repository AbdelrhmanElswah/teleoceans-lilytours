<div class="footer-area">
    <div class="footer-main-wrapper">
        <div class="footer-vactor">
            <img src="{{asset('assets/images/banner/footer-bg.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-6">
                    <div class="footer-about text-lg-start text-center">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Contact Us</h4>
                            <p class="card-footer">{{isset($contact->footer) ? $contact->footer : ''}}</p>
                            <form id="newsletterForm" action="{{ route('contact-us.message') }}" method="POST" novalidate="novalidate" class="col-md-10">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
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
                            <li><a href="{{route('home','#about')}}">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Tour Categories</h4>
                        <ul class="footer-links">
                            @foreach($categories as $category)
                            <li><a>{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
            <div class="footer-contact-wrapper">
                <h5>Contact Us:</h5>
                <ul class="footer-contact-list">
                    <li><i class="bi bi-telephone-x"></i> <a href="tel:{{isset($contact->number) ? $contact->number : ''}}">{{isset($contact->number) ? $contact->number : ''}}</a></li>
                    <li><i class="bi bi-envelope-open"></i> <a
                            href="mailto:{{isset($contact->email) ? $contact->email : ''}}"><span
                                class="__cf_email__">{{isset($contact->email) ? $contact->email : ''}}</span></a>
                    </li>
                    <li><i class="bi bi-geo-alt"></i> <a href="#">{{isset($contact->address) ? $contact->address : ''}}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-6 order-lg-1 order-3 ">
                    <div class="copyright-link text-lg-start text-center">
                        Copyrights 2024&copy; - All Rights Reserved - Powered By <a href="https://teleoceans.com" style="color: #fff">Teleoceans.com</a>
                    </div>
                </div>
                <div class="col-lg-4  order-lg-2 order-1">
                    <div class="footer-logo text-center">

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                    <div class="policy-links">
                        <ul class="policy-list justify-content-lg-end justify-content-center">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

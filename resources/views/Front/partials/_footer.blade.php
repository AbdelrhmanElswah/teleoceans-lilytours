<div class="footer-area">
    <div class="footer-main-wrapper">
        <div class="footer-vactor">
            <img src="{{asset('assets/images/banner/footer-bg.png')}}" alt="Footer Background">
        </div>
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-about text-lg-start text-center">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Contact Us</h4>
                            
                            <form id="newsletterForm" action="{{ route('contact-us.message') }}" method="POST" class="col-md-10 mx-auto mx-lg-0">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email" required>
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="submit">Go!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Quick Link</h4>
                        <ul class="footer-links">
                            <li><a href="{{route('home')}}#about">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Tour Categories</h4>
                        <ul class="footer-links">
                            @foreach($categories as $category)
                            <li><a href="{{route('category.index', $category->slug)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-contact-wrapper mt-4">
                <h5>Contact Us:</h5>
                <ul class="footer-contact-list">
                    <li><i class="bi bi-telephone-x"></i> <a href="tel:{{isset($contact->number) ? $contact->number : ''}}">{{isset($contact->number) ? $contact->number : ''}}</a></li>
                    <li><i class="bi bi-envelope-open"></i> <a href="mailto:{{isset($contact->email) ? $contact->email : ''}}">{{isset($contact->email) ? $contact->email : ''}}</a></li>
                    <li><i class="bi bi-geo-alt"></i> <a href="https://maps.google.com/?q={{isset($contact->address) ? urlencode($contact->address) : ''}}" target="_blank">{{isset($contact->address) ? $contact->address : ''}}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-12 mb-3 mb-lg-0 order-2 order-lg-1">
                    <div class="copyright-link text-center text-lg-start">
                        Copyrights 2024&copy; - All Rights Reserved<br class="d-md-none"> Powered By <a href="https://teleoceans.com" target="_blank" rel="noopener noreferrer" style="color: #fff">Teleoceans.com</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-1 order-lg-2 mb-3 mb-lg-0">
                    <div class="policy-links">
                        <ul class="policy-list justify-content-center justify-content-lg-end">
                            <li><a href="">Terms & Condition</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
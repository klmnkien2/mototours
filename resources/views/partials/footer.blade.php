<footer id="main-footer">
    <div class="newsletter" id="newsletter-area">
        <div class="container-fluid">
            <div class="clearfix titlebar">
                <h2>Newsletter Sign Up</h2>
                <p>Sign up and get latest updates, news and best deals!</p>
            </div>
            <form action="{{ route('main.newsletter') }}" method="POST" class="form-inline newsletter-form">
                <div class="newsletter-message">
                    @if(Session::has('error-newsletter'))
                        <div style="margin-bottom: 10px; color: #a94442;">
                            {{ Session::get('error-newsletter') }}
                        </div>
                    @endif
                    @if(Session::has('success-newsletter'))
                        <div style="margin-bottom: 10px; color: #3c763d;">
                            {{ Session::get('success-newsletter') }}
                        </div>
                    @endif
                </div>
                @csrf
                <div class="form-group">
                    <span class="form-field yourName"><input type="text" name="name" class="form-control input-lg" placeholder="Your Name" /></span>
                    <span class="form-field yourEmail"><input type="email" name="email" class="form-control input-lg" placeholder="Your Email" /></span>
                </div>
                <button class="btn btn-primary btn-lg" type="submit"><span><em class="fa fa-arrow-circle-o-right"></em></span></button>
            </form>
        </div>
    </div>
    <div class="footer-widgets">
        <div class="container-fluid">
            <div class="widgets">
                <div class="widget">
                    <h3 class="widget-title">About Us</h3>
                    <ul class="clearfix nav-links">
                        <li><a href="{{ route('main.page_static', ['pages' => 4]) }}">Who we are?</a></li>
                        <li><a href="{{ route('main.page_static', ['pages' => 5]) }}">Your tour guide leaders</a></li>
                        <li><a href="{{ route('main.page_static', ['pages' => 6]) }}">Why travel with us</a></li>
                        <li><a href="{{ route('main.page_static', ['pages' => 7]) }}">Press</a></li>
                        <li><a href="{{ route('main.page_static', ['pages' => 8]) }}">Partners</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h3 class="widget-title">Helpful Links</h3>
                    <ul class="clearfix nav-links">
                        <li><a href="{{ route('main.page_static', ['pages' => 1]) }}">Terms &amp; Condition</a></li>
                        <li><a href="{{ route('main.page_static', ['pages' => 2]) }}">Privacy</a></li>
                        <li><a href="{{ route('main.page_static', ['pages' => 3]) }}">FAQs</a></li>
                        <li><a href="{{ route('main.contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h3 class="widget-title">Mototours Asia</h3>
                    <ul class="clearfix nav-links">
                        <li>Add: No 1 Ngo Chau Long, Ba Dinh Str, Hanoi</li>
                        <li>Phone: <a href="tel:84-979-900-800">+84 979 900 800</a></li>
                        <li>Email: <a href="mailto:info@mototoursasia.com">info@mototoursasia.com</a></li>
                    </ul>
                    <ul class="clearfix sns">
                        <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                        <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                        <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                        <li><a href="#"><em class="fa fa-youtube"></em></a></li>
                        <li><a href="#"><em class="fa fa-instagram"></em></a></li>
                        <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container-fluid">
            <div class="footmenu">
                <ul>
                    <li><a href="{{ route('main.page_static', ['pages' => 1]) }}">About Us</a></li>
                    <li><a href="{{ route('main.page_static', ['pages' => 3]) }}">Privacy Policy</a></li>
                    <li><a href="{{ route('main.page_static', ['pages' => 2]) }}">Terms &amp; Condition</a></li>
                </ul>
            </div>
            <div class="copyright">
                <span>Copyright © <a class="site-name" href="#">Mototours® Asia</a> 1996 - 2017</span>
            </div>
        </div>
    </div>
</footer>
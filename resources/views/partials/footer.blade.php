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
                        <li><a href="#">Who we are?</a></li>
                        <li><a href="#">Your tour guide leaders</a></li>
                        <li><a href="#">Why travel with us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Partners</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h3 class="widget-title">Helpful Links</h3>
                    <ul class="clearfix nav-links">
                        <li><a href="#">Terms &amp; Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact Us</a></li>
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
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Condition</a></li>
                </ul>
            </div>
            <div class="copyright">
                <span>Copyright © <a class="site-name" href="#">Mototours® Asia</a> 1996 - 2017</span>
            </div>
        </div>
    </div>
</footer>
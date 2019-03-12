<header id="main-header">
    <div id="site-header">
        <div class="container-fluid">
            <a class="menu-icon" href="#"><em class="fa fa-bars"></em> Menu</a>
            <span class="logo"><a href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a></span>
            <div class="clearfix extend">
                <ul class="tours-on">
                    <li>Tours on:</li>
                    <li><a href="#">BMW</a></li>
                    <li><a href="#">Ducati</a></li>
                    <li><a href="#">Harley Davidson</a></li>
                    <li><a href="#">Triumph</a></li>
                </ul>
                <div class="chose-language">
                    <select class="form-control languages">
                        <option>English</option>
                        <option>French</option>
                        <option>German</option>
                        <option>Spanish</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <nav id="site-menu">
        <div class="container-fluid">
            <span class="logo"><a href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a></span>
            <ul class="sm sm-mototours" id="main-menu">
                <li><a href="/" class="current">Home</a></li>
                <li>
                    <a href="#">About</a>
                    <ul>
                        <li><a href="#"><span>Who we are?</span></a></li>
                        <li><a href="#"><span>Your tour guide leaders</span></a></li>
                        <li><a href="#"><span>Why travel with us</span></a></li>
                        <li><a href="#"><span>Privacy Policy</span></a></li>
                        <li><a href="#"><span>Press</span></a></li>
                        <li><a href="#"><span>Partners</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Tours</a>
                    <ul>
                        <li><a href="#"><span>Asia overland tours</span></a></li>
                        <li><a href="#"><span>Vietnam tours</span></a></li>
                        <li><a href="#"><span>Laos tours</span></a></li>
                        <li><a href="#"><span>Cambodia tours</span></a></li>
                        <li><a href="#"><span>Myanmar tours</span></a></li>
                        <li><a href="#"><span>India tours</span></a></li>
                        <li><a href="#"><span>Nepal tours</span></a></li>
                        <li><a href="#"><span>Nepal tours</span></a></li>
                        <li><a href="#"><span>Bhutan tours</span></a></li>
                        <li><a href="#"><span>Sri Lanka tours</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Motocycle</a>
                    <ul>
                        <li><a href="#"><span>BMW F700 GS</span></a></li>
                        <li><a href="#"><span>ROYAL ENFIELD</span></a></li>
                        <li><a href="#"><span>HONDA motorbike</span></a></li>
                        <li><a href="#"><span>Motocycle for rent</span></a></li>
                    </ul>
                </li>
                <li><a href="{{ route('main.medias') }}">Pictures</a></li>
                <li><a href="{{ route('main.contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
@extends('layouts.main')

@section('title') Homepage @endsection

@section('content')
    <div class="col-xs-12 col-sm-8 col-md-8" id="main">
        <div class="block welcome">
            <div class="block-title">
                <h1 class="title">Welcome to Mototours Asia</h1>
                <div class="location"><em class="fa fa-map-marker"></em>Vietnam - Laos - Cambodia - Thailand - Myanmar - India - Bhutan - Nepal</div>
            </div>
            <div class="block-content">
                <img class="align-left" src="uploads/welcome.png" alt="">
                You dream about an adventure of a lifetime, we will make it true. MotoTours Asia prouds to be one of the most experiences in leading motorbike tours – motorcycle tours and off-road adventure travel in Vietnam, Laos, Cambodia, Myanmar, India, Nepal, Bhutan, Sri Lankar… founded since 1996 from Hanoi, Vietnam.
                MotoTours Asia is an International Tour Operator licensed business, our license no: 01-331/2015/TCDL-GP LHQT (issued 2005, last renewed 2015). Mototours Asia has always been working at the highest level to research and develop special tours in Asia and endeavors to create a unique Vietnam motorbike tours character.
            </div>
        </div>

        @include('partials.recent_tours')

        <div class="block videos-photos">
            <div class="block-title titlebar">
                <h3 class="title"><strong class="tit">Videos & Photos</strong></h3>
            </div>
            <div class="block-content">
                <ul class="media-gallery">
                    <li><div class="clearfix inner">
                            <div class="item photo">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-1.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="uploads/video-photo-1-large.png">Photo: Lorem ipsum dolor sit amet</a></h5>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item video">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-2.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="#">Video: Lorem ipsum dolor sit amet</a></h5>
                                        <a class="btn" href="https://www.youtube.com/watch?v=LtzrQLRfVgU">Play Now</a>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item video">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-3.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                        <a class="btn" href="https://www.youtube.com/watch?v=LtzrQLRfVgU">Play Now</a>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item photo">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-4.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="uploads/video-photo-4-large.png">Photo: Lorem ipsum dolor</a></h5>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item video">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-4.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                        <a class="btn" href="https://www.youtube.com/watch?v=LtzrQLRfVgU">Play Now</a>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item photo">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-3.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="uploads/video-photo-3-large.png">Lorem ipsum dolor sit amet</a></h5>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item photo">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-2.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="uploads/video-photo-2-large.png">Lorem ipsum dolor sit amet</a></h5>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item video">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-1.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                        <a class="btn" href="https://www.youtube.com/watch?v=LtzrQLRfVgU">Play Now</a>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item photo">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-1.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="uploads/video-photo-1-large.png">Photo: Lorem ipsum dolor sit amet</a></h5>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item video">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-2.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="#">Video: Lorem ipsum dolor sit amet</a></h5>
                                        <a class="btn" href="https://www.youtube.com/watch?v=LtzrQLRfVgU">Play Now</a>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item video">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-3.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                        <a class="btn" href="https://www.youtube.com/watch?v=LtzrQLRfVgU">Play Now</a>
                                    </div></div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item photo">
                                <figure class="figure"><a href="#"><img src="uploads/video-photo-4.png" alt=""></a></figure>
                                <div class="caption"><div class="caption-inner">
                                        <h5 class="name"><a href="uploads/video-photo-4-large.png">Photo: Lorem ipsum dolor</a></h5>
                                    </div></div>
                            </div>
                        </div></li>
                </ul>
            </div>
        </div>
    </div>


@endsection
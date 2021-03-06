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
                    @foreach($recentPhotos as $aPhoto)
                    <li><div class="clearfix inner">
                            <div class="item {{ empty($aPhoto['is_video']) ? 'photo' : 'video' }}">
                                <figure class="figure"><a href="#"><img src="{{ asset('uploads/thumb/' . $aPhoto['photo']) }}" alt=""></a></figure>
                                <div class="caption">
                                    <div class="caption-inner">
                                        <h5 class="name"><a href="{{ empty($aPhoto['is_video']) ? asset('uploads/' . $aPhoto['photo']) : $aPhoto['url'] }}">{{ $aPhoto['caption'] }}</a></h5>
                                        @if(!empty($aPhoto['is_video'])) <a class="btn" href="{{$aPhoto['url']}}">Play Now</a> @endif
                                    </div>
                                </div>
                            </div>
                        </div></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


@endsection
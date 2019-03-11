@extends('layouts.main')

@section('title') Homepage @endsection

@section('content')
    <div class="col-xs-12 col-sm-8 col-md-8" id="main">
        <div class="block static-page-content">
            <div class="block-title">
                <h1 class="title">{{ $pages['title_en'] }}</h1>
            </div>
            <div class="block-content">
                {!!  $pages['content_en'] !!}
            </div>
        </div>

        @include('partials.recent_tours')

        <div class="block tours-list-block">
            <div class="block-title titlebar">
                <h3 class="title"><strong class="tit">Other Tours</strong></h3>
            </div>
            <div class="block-content">
                <ul class="clearfix tours-list">
                    <li><div class="clearfix inner">
                            <div class="item">
                                <figure class="figure"><a href="#"><img src="{{ asset('uploads/recently-tour-1.png') }}" alt=""></a></figure>
                                <div class="caption">
                                    <h5 class="name"><a href="#">Grand North Vietnam Motobike Tours</a></h5>
                                    <div class="location">Hanoi - Lao Cai - Fansipan, 16 Days</div>
                                    <div class="text">Vestibulum ac facilisis ligula. Nulla molestie ex ut ligula tempus, a fringilla lorem tincidunt</div>
                                </div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="item">
                                <figure class="figure"><a href="#"><img src="{{ asset('uploads/recently-tour-2.png') }}" alt=""></a></figure>
                                <div class="caption">
                                    <h5 class="name"><a href="#">Grand North Vietnam Motobike Tours</a></h5>
                                    <div class="location">Hanoi - Lao Cai - Fansipan, 16 Days</div>
                                    <div class="text">Vestibulum ac facilisis ligula. Nulla molestie ex ut ligula tempus, a fringilla lorem tincidunt</div>
                                </div>
                            </div>
                        </div></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
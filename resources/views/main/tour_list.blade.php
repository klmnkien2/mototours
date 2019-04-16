@extends('layouts.main')

@section('title') Homepage @endsection

@section('content')

    <div class="col-xs-12 col-sm-8 col-md-8" id="main">
        @if(!empty($destination))
        <div class="block tours-list-description">
            <div class="block-title">
                <h1 class="title">{{ $destination->name }} Motobike Tours</h1>
            </div>
            <div class="block-content">
                {!! $destination->description !!}
            </div>
        </div>
        @endif
        <div class="block tours-list-block">
            <div class="block-content">
                <ul class="clearfix tours-list">
                    @foreach($allTours as $aTour)
                    <li><div class="clearfix inner">
                            <div class="item">
                                <figure class="figure"><a href="@if(!empty($aTour->slug)) {{ route('main.tour_detail', ['slug' => $aTour->slug]) }} @else {{ route('main.page_destination', ['tours' => $aTour->id]) }} @endif"><img src="uploads/recently-tour-1.png" alt=""></a></figure>
                                <div class="caption">
                                    <h5 class="name"><a href="@if(!empty($aTour->slug)) {{ route('main.tour_detail', ['slug' => $aTour->slug]) }} @else {{ route('main.page_destination', ['tours' => $aTour->id]) }} @endif">{{ $aTour->name }}</a></h5>
                                    <div class="location">{{ $aTour->location }}</div>
                                    <div class="text">{{ str_limit(strip_tags($aTour->description), 100, '...') }}</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>

                {{ $allTours->links() }}
            </div>
        </div>
    </div>

@endsection
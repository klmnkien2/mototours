@extends('layouts.main')

@section('title') Homepage @endsection

@section('custom_css')

    <style>
        #comment-message {
            margin-top: 10px;
        }

        #comment-message .alert {
            padding: 5px;
            margin-bottom: 10px;
        }
    </style>

@endsection

@section('content')

    <div class="col-xs-12 col-sm-8 col-md-8" id="main">
        <div class="clearfix le-tabs">
            <ul class="le-tabs_tab_container">
                <li class="active"><a>Tour highlights</a></li>
                <li><a>Itinerary</a></li>
                <li><a>Prices and Booking info</a></li>
            </ul>
            <div class="le-tabs_content_container">
                <div class="le-tabs_content_inner">
                    <div class="le-tabs_content">
                        <div class="clearfix tab-content">
                            <div class="block welcome tour-highlights">
                                <div class="block-title">
                                    <h1 class="title">{{ $tours->name }}</h1>
                                    <div class="location"><em class="fa fa-map-marker"></em>{{ $tours->location }}</div>
                                </div>
                                <div class="block-content">{!! $tours['description'] !!}</div>
                            </div>
                        </div>
                        <div class="clearfix table-responsive">
                            <table class="table">
                                <colgroup>
                                    <col width="30%">
                                    <col>
                                </colgroup>
                                <tbody>
                                <tr>
                                    <th scope="row">Start/Finish</th>
                                    <td>{{ $tours['start_finish'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nearest Airport</th>
                                    <td>{{ $tours['nearest_airport'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Duration</th>
                                    <td>{{ $tours['duration'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Route</th>
                                    <td>{{ $tours['route'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Accommodetions</th>
                                    <td>{{ $tours['accommodation'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Rest Day</th>
                                    <td>{{ $tours['rest_day'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Highlights</th>
                                    <td>{!! $tours['highlights'] !!}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Minium Number of Participants</th>
                                    <td>{{ $tours['minimum_participant'] }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="le-tabs_content">
                        <div class="clearfix tab-content">
                            <div class="block welcome tour-highlights">
                                <div class="block-content">{!! $tours['itinerary'] !!}</div>
                            </div>
                        </div>
                        <div class="clearfix table-responsive">
                            <table class="table">
                                <colgroup>
                                    <col width="15%">
                                    <col>
                                </colgroup>
                                <tbody>
                                @foreach($itinerarys as $anItinerary)
                                <tr>
                                    <th scope="row">{{ $anItinerary['title'] }}</th>
                                    <td>{{ $anItinerary['description'] }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="le-tabs_content">
                        <div class="clearfix tab-content">
                            <div class="block welcome tour-highlights">
                                <div class="block-content">{!! $tours['book_info'] !!}</div>
                            </div>
                        </div>
                        <div class="clearfix block table-responsive">
                            <table class="table table-hover price-info">
                                <colgroup>
                                    <col width="35%">
                                    <col>
                                    <col>
                                    <col>
                                </colgroup>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th><img style="height:40px;" src="{{ asset('images/207.png') }}" alt="sharing room, riding 2 up"></th>
                                    <th><img style="height:40px;" src="{{ asset('images/208.png') }}" alt="sharing room, riding solo"></th>
                                    <th><img style="height:40px;" src="{{ asset('images/209.png') }}" alt="single room, riding solo"></th>
                                </tr>
                                <tr>
                                    <th>Tour price per person</th>
                                    <th>sharing room, <br/>riding 2 up</th>
                                    <th>sharing room, <br/>riding solo</th>
                                    <th>single room, <br/>riding solo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 790 mm<br/>Weight: 216 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/3b166d6652340f56027559c03306b808_[200x0].jpg />" data-original-title="Honda NC 750 S ">Honda NC 750 S </a><br>
                                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 830 mm<br/>Weight: 219 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/eb5adbc2f4affe9e2d27eb8fd138305f_[200x0].jpg />" data-original-title="Honda NC 750 X">Honda NC 750 X</a><br>
                                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 820 mm<br/>Weight: 215 kg<br/>Capacity: 645 ccm<br/>Performance: 49 kW / 67 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/4e910d56d26cb044ff0de48ef8d490ae_[200x0].jpg />" data-original-title="Suzuki V-Strom 650">Suzuki V-Strom 650</a>
                                    </td>
                                    <td>$ 2.660</td>
                                    <td>$ 2.930</td>
                                    <td>$ 3.160</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 790 mm<br/>Weight: 216 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/3b166d6652340f56027559c03306b808_[200x0].jpg />" data-original-title="Honda NC 750 S ">Honda NC 750 S </a><br>
                                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 830 mm<br/>Weight: 219 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/eb5adbc2f4affe9e2d27eb8fd138305f_[200x0].jpg />" data-original-title="Honda NC 750 X">Honda NC 750 X</a><br>
                                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 820 mm<br/>Weight: 215 kg<br/>Capacity: 645 ccm<br/>Performance: 49 kW / 67 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/4e910d56d26cb044ff0de48ef8d490ae_[200x0].jpg />" data-original-title="Suzuki V-Strom 650">Suzuki V-Strom 650</a>
                                    </td>
                                    <td>$ 2.660</td>
                                    <td>$ 2.930</td>
                                    <td>$ 3.160</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 790 mm<br/>Weight: 216 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/3b166d6652340f56027559c03306b808_[200x0].jpg />" data-original-title="Honda NC 750 S ">Honda NC 750 S </a><br>
                                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 830 mm<br/>Weight: 219 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/eb5adbc2f4affe9e2d27eb8fd138305f_[200x0].jpg />" data-original-title="Honda NC 750 X">Honda NC 750 X</a><br>
                                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 820 mm<br/>Weight: 215 kg<br/>Capacity: 645 ccm<br/>Performance: 49 kW / 67 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/4e910d56d26cb044ff0de48ef8d490ae_[200x0].jpg />" data-original-title="Suzuki V-Strom 650">Suzuki V-Strom 650</a>
                                    </td>
                                    <td>$ 2.660</td>
                                    <td>$ 2.930</td>
                                    <td>$ 3.160</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix tab-content">{!! $tours['price_info'] !!}</div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="clearfix stages">
            @foreach($stages as $aStage)
            <li><div class="clearfix inner">
                    <div class="stage">
                        <div class="stage-body">
                            <h4 class="step">Stage {{ $aStage['number'] }}</h4>
                            <h5 class="date">{{ date_format(new DateTime('@' . strtotime($aStage['from_date'])), 'd/m') }} ~
                                {{ date_format(new DateTime('@' . strtotime($aStage['to_date'])), 'd/m') }}</h5>
                            {!! $aStage['description'] !!}
                        </div>
                        <div class="stage-foot">
                            <a class="btn" href="#">Request</a>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        @include('main.comment_form')
    </div>

@endsection
<div class="col-xs-12 col-sm-4 col-md-4" id="sidebar">
    <div class="block tourfinder">
        <div class="block-title titlebar">
            <h3 class="title"><strong class="tit">Tour finder</strong><a class="link" href="/tour-calendar/">Tour Calendar</a></h3>
        </div>
        <div class="block-content">
            <form class="clearfix tourfinder-form" id="tourfinderform" action="{{ route('main.search_tour') }}">
                @csrf
                <div class="row">
                    <div class="col-xs-12"><input type="text" class="form-control" placeholder="Search..." name="keyword"></div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <select class="form-control" name="destination">
                            <option value="">Destination</option>
                            @foreach($destinationList as $aDestination)
                            <option value="{{$aDestination->id}}">{{$aDestination->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xs-6">
                        <select class="form-control" name="adventure_level">
                            <option value="">Adventure Level</option>
                            @foreach($adventureLevels as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <select class="form-control" name="motorcycle">
                            <option value="">Motorcycle</option>
                            @foreach($motorcycleBrands as $option)
                            <option value="{{ $option->code }}">{{ $option->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xs-6">
                        <select class="form-control" name="date">
                            <option value="">Date</option>
                            @foreach($onGoingMonths as $month)
                            <option value="{{ $month }}">{{ date_format(new DateTime('@' . $month), 'Y / F') }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn" style="width: 100%">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="block tourfinder-results" style="display:block;">
        <div class="block-title titlebar">
            <h4 class="title"><strong class="tit">Results for</strong><span id="pg-resultfor" class="text"></span></h4>
        </div>
        <div class="block-content" id="pg-resultcontent">
            <div style="text-align: center">@lang('Search result.')</div>
        </div>
    </div>
    <div class="clearfix maps">
        <div class="clearfix map"><img src="{{ asset('uploads/map-1.png') }}" alt=""></div>
    </div>
</div>
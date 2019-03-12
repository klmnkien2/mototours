@extends('layouts.main')

@section('title') Homepage @endsection

@section('content')
    <div class="col-xs-12 col-sm-8 col-md-8" id="main">

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

                <div style="clear: both"></div>
                {{ $recentPhotos->links() }}
            </div>
        </div>
    </div>


@endsection
<div class="block recentlyTours">
    <div class="block-title titlebar">
        <h3 class="title"><strong class="tit">Recently Tours</strong></h3>
    </div>
    <div class="block-content">
        <div class="owl-carousel recently-tours">
            @foreach($recentTours as $aTour)
            <div class="item">
                <figure class="figure">
                    <a href="{{ route('main.page_destination', ['tours' => $aTour->id]) }}"><img src="{{ asset('uploads/' . $aTour->photo) }}" alt=""></a>
                </figure>
                <div class="caption">
                    <h5 class="name"><a href="{{ route('main.page_destination', ['tours' => $aTour->id]) }}">{{ $aTour->name }}</a></h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
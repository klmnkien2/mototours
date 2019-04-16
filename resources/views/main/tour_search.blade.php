@if ($searchedTours->isEmpty())

    <div style="text-align: center">@lang('No result was found.')</div>

@else

<ul class="tour-results">
    @foreach($searchedTours as $aTour)
    <li class="tour">
        <a href="@if(!empty($aTour->slug)) {{ route('main.tour_detail', ['slug' => $aTour->slug]) }} @else {{ route('main.page_destination', ['tours' => $aTour->id]) }} @endif">
            <figure class="figure"><img class="img" src="{{ asset('uploads/thumb/' . $aTour->photo) }}" alt=""></figure>
            <div class="tour-info">
                <h5 class="tour-name">{{ $aTour->name }}</h5>
                <span class="tour-text">{{ $aTour->location }}: {{ $aTour->duration }}</span>
            </div>
        </a>
    </li>
    @endforeach
</ul>
@endif
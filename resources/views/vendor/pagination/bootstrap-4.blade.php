
@if ($paginator->hasPages())
    <ul class="clearfix site-pagenavi">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-control prev" aria-hidden="true">@lang('Previous')</span>
            </li>
        @else
            <li class="page-control first">
                <a class="page-control first" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@lang('Previous')</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li aria-current="page"><strong class="page-link">{{ $page }}</strong></li>
                    @else
                        <li><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a class="page-link next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@lang('Next')</a>
            </li>
        @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">@lang('Next')</span>
            </li>
        @endif
    </ul>
@endif

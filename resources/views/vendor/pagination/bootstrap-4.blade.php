@if ($paginator->hasPages())
<div class="qt-pagination qt-content-primary">
    
        <ul class="pagination qt-container">
            <li class="special"><span class="qt-pagination-label qt-content-primary-dark">PAGES</span></li>

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item special disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href="#!" class="page-link qt-btn qt-btn-l qt-btn-primary" aria-hidden="true"><i class="dripicons-arrow-thin-left"></i></a   >
                </li>
            @else
                <li class="page-item special waves-effect">
                    <a class="page-link qt-btn qt-btn-l qt-btn-primary" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="dripicons-arrow-thin-left"></i></a>
                </li>
            @endif
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item special waves-effect">
                    <a class="page-link qt-btn qt-btn-l qt-btn-primary" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="dripicons-arrow-thin-right"></i></a>
                </li>
            @else
                <li class="page-item special disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="#!" class="page-link qt-btn qt-btn-l qt-btn-primary" aria-hidden="true"><i class="dripicons-arrow-thin-right"></i></a>
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
                        <a class="page-link"><li class="item active hide-on-large-and-down" aria-current="page">{{ $page }}</a></li>
                        @else
                            <li class="item waves-effect hide-on-large-and-down"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

        </ul>
    
</div>
@endif

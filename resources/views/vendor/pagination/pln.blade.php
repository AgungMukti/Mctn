@if ($paginator->hasPages())
<nav class="pln-pager" role="navigation" aria-label="{{ __('Navigasi halaman') }}">

  @if ($paginator->onFirstPage())
    <span class="pln-btn is-disabled" aria-disabled="true">
      <i class="bi bi-arrow-left"></i> <span>{{ __('Sebelumnya') }}</span>
    </span>
  @else
    <a class="pln-btn" href="{{ $paginator->previousPageUrl() }}" rel="prev">
      <i class="bi bi-arrow-left"></i> <span>{{ __('Sebelumnya') }}</span>
    </a>
  @endif

  <div class="pln-nums">
    @foreach ($elements as $element)
      @if (is_string($element))
        <span class="pln-num is-dots">{{ $element }}</span>
      @endif

      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <span class="pln-num is-active" aria-current="page">{{ $page }}</span>
          @else
            <a class="pln-num" href="{{ $url }}">{{ $page }}</a>
          @endif
        @endforeach
      @endif
    @endforeach
  </div>

  @if ($paginator->hasMorePages())
    <a class="pln-btn is-fill" href="{{ $paginator->nextPageUrl() }}" rel="next">
      <span>{{ __('Berikutnya') }}</span> <i class="bi bi-arrow-right"></i>
    </a>
  @else
    <span class="pln-btn is-disabled" aria-disabled="true">
      <span>{{ __('Berikutnya') }}</span> <i class="bi bi-arrow-right"></i>
    </span>
  @endif

</nav>
@endif
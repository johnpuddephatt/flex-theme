@if ($children)

  <div class="w-full container pb-16 divide-y divide-sky">
    @foreach ($children as $key => $page)
      @include('partials.page-card')
    @endforeach
  </div>

@endif

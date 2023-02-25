@if ($children)

  <div class="w-full container flex flex-col gap-2 pb-16 divide-y divide-sky">
    @foreach ($children as $key => $page)
      @include('partials.page-card')
    @endforeach
  </div>

@endif

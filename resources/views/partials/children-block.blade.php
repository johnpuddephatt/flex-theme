@if (count($children))
  <div class="my-16 flex flex-col gap-4 xl:max-w-5xl 2xl:max-w-6xl">
    @foreach ($children as $key => $page)
      @include('partials.page-card-alternative')
    @endforeach
  </div>
@endif

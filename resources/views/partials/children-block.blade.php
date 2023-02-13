@if (count($children))
  <div class="container my-16 flex flex-col gap-6 mx-auto xl:max-w-5xl 2xl:max-w-6xl 2xl:mt-24">
    @foreach ($children as $key => $page)
      @include('partials.page-card-alternative')
    @endforeach
  </div>
@endif

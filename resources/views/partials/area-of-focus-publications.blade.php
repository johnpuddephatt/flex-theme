@if ($publications && count($publications))
  <div class="container xl:max-w-5xl 2xl:max-w-6xl">
    <h3 class="border-t border-sky pt-12 pb-8 text-2xl font-bold text-navy">Related publications</h3>
    <div class="space-y-4">
      @foreach ($publications as $publication)
        @include('partials.publication-card')
      @endforeach
    </div>
  </div>
@endif

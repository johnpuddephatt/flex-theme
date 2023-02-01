<div class="my-16 space-y-4">
  @foreach ($publications as $publication)
    @include('partials.publication-card')
  @endforeach
</div>

@if ($posts && count($posts))
  <div class="container py-16 xl:max-w-5xl">
    <h3 class="border-t border-sky pt-12 pb-8 text-2xl font-bold mb-4 text-navy">Related updates</h3>
    <div class="mb-8 space-y-4">

      @foreach ($posts as $post)
        @include('partials.post-card', ['post_id' => $post->ID])
      @endforeach
    </div>
  </div>
@endif

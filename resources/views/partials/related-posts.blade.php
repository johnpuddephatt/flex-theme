@if ($posts && count($posts) && rwmb_get_value('show_related_posts'))
  <div class="container py-8 xl:max-w-5xl 2xl:max-w-6xl">
    <h3 class="border-t border-sky pt-12 pb-8 text-2xl font-bold mb-4 text-navy">Latest updates</h3>
    <div class="mb-8">

      @foreach ($posts as $post)
        @include('partials.post-card', ['post_id' => $post->ID])
      @endforeach
    </div>
  </div>
@endif

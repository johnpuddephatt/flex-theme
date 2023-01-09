<div class="my-16 space-y-4">
  @foreach ($posts as $post)
    @include('partials.post-card', ['post_id' => $post->ID])
  @endforeach
</div>

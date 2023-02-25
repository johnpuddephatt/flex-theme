<div class="my-8">
  @foreach ($posts as $post)
    @include('partials.post-card', ['post_id' => $post->ID])
  @endforeach
</div>

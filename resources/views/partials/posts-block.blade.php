<div class="my-16 flex flex-col gap-2">
  @foreach ($posts as $post)
    @include('partials.post-card', ['post_id' => $post->ID])
  @endforeach
</div>

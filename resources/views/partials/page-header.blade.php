<div>
  @if (has_post_thumbnail($post && isset($post->ID) ? $post->ID : '') &&
      isset(
          wp_get_attachment_metadata(get_post_thumbnail_id($post && isset($post->ID) ? $post->ID : ''))['sizes'][
              'square'
          ]))
    <div class="lg:w-[50vw] max-w-5xl lg:ml-auto w-full ml-4">
      {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', '16by9', ['class' => ' w-full rounded-bl-big']) !!}
    </div>
  @else
    <div class="h-20"></div>
  @endif

  <div class="container xl:max-w-5xl 2xl:max-w-6xl">

    <div class="">
      @if (isset($post) && isset($post->post_type) && $post->post_type == 'post')
        <div class="mb-4 text-xl font-bold md:text-2xl md:mb-8">
          {{ get_the_date() }}
        </div>
      @elseif(isset($parent))
        <div class="inline-flex mt-6 mb-4 md:mb-6">
          <a class="" href="/">Home</a>
          <span class="px-3">&gt;</span>
          <a class="" href="{{ $parent->permalink }}">{!! $parent->title !!}</a>
        </div>
      @endif

      <h2 class="max-w-3xl font-bold text-4xl lg:text-5xl xl:text-6xl text-blue">
        {!! $title !!}
      </h2>

      @if (!empty($post->post_excerpt))
        <p class="max-w-2xl my-8 text-lg font-semibold md:text-xl">
          {!! $post->post_excerpt !!}
        </p>
      @endif
    </div>
  </div>
</div>

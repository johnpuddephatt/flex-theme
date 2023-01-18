<div class="border-t border-sky relative lg:pt-16">
  <div
    class="z-10 px-0 container flex items-stretch flex-col-reverse overflow-hidden mx-auto text-white max-w-7xl md:flex-row">
    @if (has_post_thumbnail(isset($post->ID) ? $post->ID : '') &&
        isset(wp_get_attachment_metadata(get_post_thumbnail_id($post->ID))['sizes']['square']))
      <div class="{{ $background ?? 'bg-sky' }} rounded-bl-flex relative flex-1 lg:max-w-lg overflow-hidden">
        {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square', [
            'class' => 'isolate w-full rounded-tr-flex',
        ]) !!}
      </div>
    @endif
    <div class="{{ $background ?? 'bg-sky' }} lg:pt-40 px-4 py-12 lg:p-16 md:flex-1 flex flex-col items-start">

      <h2 class="{{ $titletext ?? 'text-navy' }} font-bold text-4xl lg:text-6xl">{{ $post->post_title }}
      </h2>

      @if (!empty($post->post_excerpt))
        <p class="{{ $text ?? 'text-navy' }} max-w-lg mt-4 lg:mt-8 text-xl font-semibold">
          {!! $post->post_excerpt !!}</p>
      @endif
    </div>

  </div>
</div>

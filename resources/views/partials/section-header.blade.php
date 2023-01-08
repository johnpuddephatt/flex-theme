<div class="border-t border-sky relative lg:pt-16">
  <div
    class="{{ $background ?? 'bg-sky' }} z-10 px-0 container flex flex-col-reverse rounded-bl-medium xl:rounded-bl-big overflow-hidden items-start mx-auto text-white max-w-7xl md:flex-row">
    @if (has_post_thumbnail(isset($post->ID) ? $post->ID : '') &&
        isset(wp_get_attachment_metadata(get_post_thumbnail_id($post->ID))['sizes']['square']))
      <div class="relative flex-1 lg:max-w-lg">
        {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square', [
            'class' => 'w-full rounded-tr-medium xl:rounded-tr-big',
        ]) !!}
      </div>
    @endif
    <div class="lg:pt-40 px-4 py-12 lg:p-16 mx-auto md:flex-1">

      <h2 class="{{ $titletext ?? 'text-navy' }} font-bold text-4xl lg:text-6xl">{{ $post->post_title }}
      </h2>

      @if (!empty($post->post_excerpt))
        <p class="{{ $text ?? 'text-navy' }} max-w-lg mt-4 lg:mt-8 text-xl font-semibold">
          {!! $post->post_excerpt !!}</p>
      @endif
    </div>

  </div>
</div>

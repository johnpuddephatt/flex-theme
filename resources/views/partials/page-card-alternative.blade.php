<a href="{{ get_permalink($page->ID) }}">
  <div class="flex items-stretch flex-row rounded-tr-medium rounded-bl-giant xl:max-w-3xl">
    <div class="rounded-bl-flex mb-auto hidden lg:block relative bg-navy overflow-hidden">
      @if (has_post_thumbnail(isset($page->ID) ? $page->ID : '') &&
          isset(wp_get_attachment_metadata(get_post_thumbnail_id($page->ID))['sizes']['square-xs']))
        {!! get_the_post_thumbnail($page->ID, 'square-xs', [
            'class' => 'w-40 rounded-tr-flex rounded-bl-flex max-w-none block ',
        ]) !!}
      @else
        <div class="rounded-tr-flex rounded-bl-flex block w-40 h-40 bg-sky max-w-none"></div>
      @endif
    </div>
    <div class="flex-1 p-6 px-8 flex flex-col items-start justify-center antialiased bg-navy">
      <h3 class="text-xl font-semibold text-white">{!! get_the_title($page->ID) !!}</h3>
      <span class="inline-block mt-4 py-2 px-6 rounded-xl rounded-tr-none border-2 border-green text-sm text-white">Read
        more</span>
    </div>
  </div>
</a>

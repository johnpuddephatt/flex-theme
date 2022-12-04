<a href="{{ get_permalink($page->ID) }}"
  @php(post_class(''))>
    <div class="flex flex-row bg-navy rounded-tr-medium rounded-bl-medium overflow-hidden items-center xl:max-w-3xl mx-auto">
    <div
        class="mb-auto hidden lg:block relative">
        @if (has_post_thumbnail(isset($page->ID) ? $page->ID : '') &&
            isset(wp_get_attachment_metadata(get_post_thumbnail_id($page->ID))['sizes']['square-xs']))
        {!! get_the_post_thumbnail($page->ID, 'square-xs', [
            'class' => 'w-48 rounded-tr-medium rounded-bl-medium max-w-none block ',
        ]) !!}
        @else
        <div class="block w-48 h-48 bg-sky rounded-tr-medium rounded-bl-medium max-w-none"></div>

        @endif
  </div>
  <div class="p-8">
    <h3 class="mt-2 mb-4 text-xl font-bold lg:text-2xl text-white">{!! get_the_title($page->ID) !!}</h3>
    <span
      class="font-semibold inline-block mt-8 py-3 px-6 rounded-xl rounded-tr-none border-2 border-green text-lg text-white">Read
      more</span>
  </div>
  </div>
</a>

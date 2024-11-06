<a href="{{ get_permalink($page->ID) }}"
  @php(post_class(''))>
    <div class="py-12 2xl:py-24 flex flex-row items-center gap-16 lg:gap-24 xl:max-w-5xl mx-auto  2xl:max-w-6xl">
    <div
        class="mb-auto hidden lg:block relative">
        @if (has_post_thumbnail(isset($page->ID) ? $page->ID : '') &&
            isset(wp_get_attachment_metadata(get_post_thumbnail_id($page->ID))['sizes']['square-xs']))
        {!! get_the_post_thumbnail($page->ID, 'square-xs', [
            'class' => 'w-72 rounded-tr-flex rounded-bl-flex max-w-none block ',
        ]) !!}
        @else
        <img src="https://via.placeholder.com/150" class="block w-72 rounded-tr-flex rounded-bl-flex max-w-none" />

        @endif
  </div>
  <div>
    <h3 class="mt-2 mb-4 text-2xl font-bold lg:text-4xl text-navy">{!! get_the_title($page->ID) !!}</h3>
    <p class="md:text-lg">{!! wp_trim_words(get_the_excerpt($page->ID), 40) !!}</p>
    <span
      class="font-semibold inline-block text-sm mt-8 lg:mt-16 py-3 px-6 rounded-xl rounded-tr-none border-2 border-green lowercase text-navy">Read
      more</span>
  </div>
  </div>
</a>

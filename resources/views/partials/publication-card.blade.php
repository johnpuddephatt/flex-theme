@if (!isset($publication) || $publication)
  <a href="{{ get_permalink(isset($publication) ? $publication->ID : null) }}"
    class="my-2 lg:my-8 no-underline flex pr-8 flex-row bg-orange bg-opacity-20 rounded-tl-xl lg:rounded-tl-3xl max-w-3xl overflow-hidden">
    <div class="bg-orange w-12 lg:w-36 h-36 rounded-br-xl lg:rounded-br-3xl"></div>
    <div class="py-5 px-5 lg:px-10 flex-1 flex flex-col">
      <h3 class="!lg:text-xl !my-0 !text-black mb-1 !text-lg !leading-tight font-semibold">
        {!! wp_trim_words(get_the_title(isset($publication) ? $publication->ID : null), 15) !!}</h3>
      <span class="mt-auto text-sm">{{ get_the_date(isset($publication) ? $publication->ID : null) }}</span>
      <!-- <p class="!my-0 max-w-lg text-navy">{!! wp_trim_words(get_the_excerpt(isset($publication) ? $publication->ID : null), 15) !!}</p> -->
    </div>
    @svg('icons.arrow-right')
  </a>
@endif

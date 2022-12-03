<a href="{{ get_permalink(isset($publication) ? $publication->ID : null) }}"
  class="flex pr-8 flex-row bg-orange bg-opacity-20 rounded-tl-3xl max-w-3xl overflow-hidden">
  <div class="bg-orange w-36 h-36 rounded-br-3xl"></div>
  <div class="py-7 px-10 flex-1">
    <h3 class="mb-2 text-xl font-semibold">{{ get_the_title(isset($publication) ? $publication->ID : null) }}</h3>
    <p class="max-w-lg text-navy">{!! wp_trim_words(get_the_excerpt(isset($publication) ? $publication->ID : null), 15) !!}</p>
  </div>
  @svg('icons.arrow-right')
</a>

<a href="{{ get_permalink($post_id ?? null) }}"
  @php(post_class('flex items-center flex-row mx-auto block bg-sky hover:!no-underline max-w-[48rem]'))>
  <div class="flex-grow py-4 px-6  lg:px-10 !text-navy">
  <div class="!mb-2 font-semibold ">{{ get_the_date(null, $post_id ?? null) }}</div>
  <h3 class="!mt-0 mb-4 !text-lg !text-navy xl:!leading-tight !leading-tight font-semibold lg:!text-xl">
    {!! get_the_title($post_id ?? null) !!}
  </h3>
  <div class="text-sm lg:text-base">
    {!! wp_trim_words(get_the_excerpt($post_id ?? null), 15) !!}
  </div>
  <div class="text-base mt-6 font-semibold leading-none ">Read more</div>
  </div>
    @if (has_post_thumbnail($post_id ?? null))
    {!! get_the_post_thumbnail($post_id ?? null, 'square', [
        'class' => '!my-0 object-cover object-center rounded-bl-flex w-72 h-72 hidden lg:block flex-none',
    ]) !!}
    @else
    <div class="flex-none hidden lg:block rounded-bl-flex w-72 h-72 bg-sky"></div>
    @endif
  </a>

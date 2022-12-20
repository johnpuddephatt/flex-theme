@php
  $colours = [
      'DEFAULT' => [
          'background' => 'white',
          'border' => 'black',
          'text' => 'black',
      ],
      'Report' => [
          'background' => 'green',
          'border' => 'sky',
          'text' => 'white',
      ],
      'Briefing' => [
          'background' => 'sky',
          'border' => 'green',
          'text' => 'blue',
      ],
  ];
@endphp

<div class="text-center">
  <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-12">Latest publications</h2>
  <div class="overflow-x-auto lg:overflow-x-hidden pb-6">
    <div class="text-left grid grid-cols-3 gap-8 xl:gap-16 container max-w-none w-[200%] md:w-[150%] xl:w-full">
      @foreach ($latest_publications as $publication)
        @php $category = get_the_terms($publication->ID, 'resourcetype') ? get_the_terms($publication->ID, 'resourcetype')[0] : null; @endphp
        <div class="text-center">
          <a href="{{ get_permalink($publication->ID) }}"
            @if ($category) style="background-color: {{ carbon_get_term_meta($category->term_id, 'resourcetype_background') }}; color: {{ carbon_get_term_meta($category->term_id, 'resourcetype_text') }}; border-color: {{ carbon_get_term_meta($category->term_id, 'resourcetype_spine') }};" @endif
            class="shadow text-left justify-between antialiased aspect-[3/4] flex flex-col py-12 px-6 border-l-[1.25rem]">
            <h3 class="text-2xl lg:text-3xl font-bold">{!! $publication->post_title !!}</h3>

            @if ($category)
              <p class="pt-6 mt-auto font-semibold text-lg xl:text-xl">
                {!! $category->name !!}
              </p>
            @endif

          </a>
          <a href="{{ get_permalink($publication->ID) }}"
            class="lowercase inline-block mt-8 mx-auto lg:ml-0 border-2 border-green px-9 py-3 text-sm font-semibold rounded-xl rounded-tr-none whitespace-nowrap">Read</a>
        </div>
      @endforeach
    </div>
  </div>
  <a href="/publications/?all&orderby=date&order=DESC"
    class="mt-6 mx-auto lowercase bg-green text-white border-2 text-base border-green inline-block px-8 py-3 font-semibold rounded-xl rounded-tr-none whitespace-nowrap">
    View all
  </a>
</div>

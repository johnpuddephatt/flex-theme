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

<div class="">
  <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-12">Latest publications</h2>
  <div class="overflow-x-auto">
    <div class="grid grid-cols-3 gap-16 container w-[250%] lg:w-full">
      @foreach ($latest_publications as $publication)
        @php $name = get_the_terms($publication->ID, 'resourcetype') ? get_the_terms($publication->ID, 'resourcetype')[0]->name : "DEFAULT"; @endphp
        <a href="{{ get_permalink($publication->ID) }}"
          class="bg-{{ $colours[$name]['background'] }} text-{{ $colours[$name]['text'] }} border-{{ $colours[$name]['border'] }} border justify-between antialiased aspect-[3/4] flex flex-col py-12 px-6 border-l-[1.25rem]">
          <h3 class="text-3xl font-bold">{{ $publication->post_title }}</h3>

          @if (get_the_terms($publication->ID, 'resourcetype'))
            <p class="pt-6 mt-auto font-semibold text-xl">
              {{ get_the_terms($publication->ID, 'resourcetype')[0]->name }}
            </p>
          @endif
        </a>
      @endforeach
    </div>
  </div>
</div>

@if ($siblings)
  <aside class="hidden pt-24 pb-12 border-r border-sky xl:block">
    <nav class="">
      <h2 class="pl-0 2xl:pl-0 px-6 mb-6 text-xl font-semibold 2xl:px-8">
        <a class="pl-[calc((100vw-1280px)/2)] 2xl:pl-[calc((100vw-1536px)/2)] block mx-auto mr-16 w-60"
          href=" {{ $parent->permalink }}">
          {!! $parent->title !!}
        </a>
      </h2>
      @foreach ($siblings as $page)
        <a class="@if (get_permalink() == get_permalink($page->ID)) bg-opacity-100 text-navy @else hover:bg-opacity-30 bg-opacity-0 @endif pl-0 px-6 2xl:pl-0 2xl:px-8 block py-3 text-lg bg-sky transition"
          href="{{ get_permalink($page->ID) }}">
          <span
            class="pl-[calc((100vw-1280px)/2)] 2xl:pl-[calc((100vw-1536px)/2)] block mx-auto mr-4 w-72">{!! get_the_title($page->ID) !!}</span>
        </a>
      @endforeach
    </nav>
  </aside>
@endif

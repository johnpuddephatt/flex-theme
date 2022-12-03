<aside class="hidden pt-24 pb-12 border-r border-sky lg:block">
  <nav class="">
    <h2 class="pl-0 2xl:pl-0 px-6 text-xl font-semibold 2xl:px-8">
      <a class="pl-[calc((100vw-1280px)/2)] 2xl:pl-[calc((100vw-1536px)/2)] block mx-auto mr-16 w-60"
        href="{{ get_permalink(get_option('page_for_publications')) }}">
        Publications
      </a>
    </h2>

    <div class="mt-12 pl-0 2xl:pl-0 px-6 2xl:px-8 uppercase tracking-wider mb-3 text-xs font-semibold text-blue">
      <span class="pl-[calc((100vw-1280px)/2)] 2xl:pl-[calc((100vw-1536px)/2)] block mx-auto mr-16 w-60">Browse by
        type</span>
    </div>
    @foreach ($types as $type)
      <a class="@if (get_term_link(get_queried_object_id()) == get_term_link($type->term_id, 'resourcetype')) bg-opacity-100 text-navy @else hover:bg-opacity-30 bg-opacity-0 @endif pl-0 px-6 2xl:pl-0 2xl:px-8 block py-3 text-lg bg-sky transition"
        href="{{ get_term_link($type->term_id, 'resourcetype') }}">
        <span
          class="pl-[calc((100vw-1280px)/2)] 2xl:pl-[calc((100vw-1536px)/2)] block mx-auto mr-4 w-72">{!! get_term($type->term_id)->name !!}</span>
      </a>
    @endforeach

    <div class="mt-12 pl-0 2xl:pl-0 px-6 2xl:px-8 uppercase tracking-wider mb-3 text-xs font-semibold text-blue">
      <span class="pl-[calc((100vw-1280px)/2)] 2xl:pl-[calc((100vw-1536px)/2)] block mx-auto mr-16 w-60">Browse by
        area</span>
    </div>
    @foreach ($areas_of_focus as $area_of_focus)
      <a class="hover:bg-opacity-30 bg-opacity-0 pl-0 px-6 2xl:pl-0 2xl:px-8 block py-3 text-lg bg-sky transition"
        href="{{ get_permalink($area_of_focus->ID) }}">

        <span
          class="pl-[calc((100vw-1280px)/2)] 2xl:pl-[calc((100vw-1536px)/2)] block mx-auto mr-4 w-72">{!! $area_of_focus->post_title !!}</span>
      </a>
    @endforeach

  </nav>
</aside>

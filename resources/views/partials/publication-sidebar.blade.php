<aside class="hidden pt-24 pb-12 border-r border-sky lg:block">
  <nav class="">
    <h2 class="pl-0 2xl:pl-0 px-6 text-xl font-semibold 2xl:px-8">
      <a class="pl-10 2xl:pl-12 block mx-auto mr-16 w-60" href="{{ get_permalink(get_option('page_for_publications')) }}">
        Publications
      </a>
    </h2>

    <div class="mt-8 pl-0 2xl:pl-0 px-6 2xl:px-8 mb-3 font-semibold text-green">
      <span class="pl-10 text-lg 2xl:pl-12 block mx-auto mr-16 w-60">Browse by
        type</span>
    </div>
    @foreach ($types as $type)
      <a class="@if (get_term_link(get_queried_object_id()) == get_term_link($type->term_id, 'resourcetype')) bg-opacity-100 text-navy @else hover:bg-opacity100 bg-opacity-0 @endif pl-0 px-6 2xl:pl-0 2xl:px-8 block py-1.5 text-lg bg-sky transition"
        href="{{ get_term_link($type->term_id, 'resourcetype') }}">
        <span class="pl-10 2xl:pl-12 block mx-auto mr-4 w-72">{!! get_term($type->term_id)->name !!}</span>
      </a>
    @endforeach

    <div class="mt-8 pl-0 2xl:pl-0 px-6 2xl:px-8 mb-3 font-semibold text-green">
      <span class="pl-10 2xl:pl-12 text-lg block mx-auto mr-16 w-60">Browse by
        area of focus</span>
    </div>
    @foreach ($areas_of_focus as $area_of_focus)
      <a class="hover:bg-opacity-100 bg-opacity-0 pl-0 px-6 2xl:pl-0 2xl:px-8 block py-1.5 text-lg bg-sky transition"
        href="?s=&post_type=publication&post_resourcetype=&post_areaoffocus={{ $area_of_focus->ID }}"><span
          class="pl-10 2xl:pl-12 block mx-auto mr-4 w-72">{!! $area_of_focus->post_title !!}</span>
      </a>
    @endforeach

  </nav>
</aside>

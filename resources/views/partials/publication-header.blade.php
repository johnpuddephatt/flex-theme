<div>

  @if (has_post_thumbnail($post && isset($post->ID) ? $post->ID : '') &&
      isset(
          wp_get_attachment_metadata(get_post_thumbnail_id($post && isset($post->ID) ? $post->ID : ''))['sizes']['16by9']))
    <div class="w-1/2">
      {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', '16by9', [
          'class' => ' w-full rounded-br-flex',
      ]) !!}
    </div>
  @else
    <div class="h-24"></div>
  @endif

  <div class="container max-w-5xl mb-12">

    <div class="">
      <div class="inline-flex mt-1 mb-4 md:mb-6">
        <a class="" href="/">Home</a>
        <span class="px-3">&gt;</span>
        <a class="" href="{{ get_permalink(get_option('page_for_publications')) }}">Publications</a>
      </div>
      <h2 class="max-w-3xl font-bold text-4xl lg:text-5xl text-navy">
        {!! $title !!}
      </h2>

      <div class="mt-4 mb-6 text-xl font-semibold text-navy md:mb-4">
        {{ get_the_date('F Y') }}
      </div>

      <div class="flex gap-4">

        @if ($publication_types)
          <div class="mt-4 mb-6 flex flex-row gap-2">
            @foreach ($publication_types as $type)
              <a href="{{ get_term_link($type->term_id, 'resourcetype') }}"
                class="bg-sky rounded-lg rounded-tr-none px-6 text-sm py-2 font-semibold">{!! $type->name !!}</a>
            @endforeach
          </div>
        @endif

        @if ($publication_areas_of_focus)
          <div class="mt-4 mb-6 flex flex-row gap-2">
            @foreach ($publication_areas_of_focus as $area_of_focus)
              <a href="{{ get_permalink($area_of_focus->ID) }}"
                class="bg-sky rounded-lg rounded-tr-none px-6 text-sm py-2 font-semibold">
                {!! $area_of_focus->post_title !!}</a>
            @endforeach
          </div>
        @endif

        @if ($publication_what_we_dos)
          <div class="mt-4 mb-6 flex flex-row gap-2">
            @foreach ($publication_what_we_dos as $what_we_do)
              <a href="{{ get_permalink($what_we_do->ID) }}"
                class="bg-sky rounded-lg rounded-tr-none px-6 text-sm py-2 font-semibold">
                {!! $what_we_do->post_title !!}</a>
            @endforeach
          </div>
      </div>
      @endif

      @if (!empty($post->post_excerpt))
        <p class="max-w-3xl mt-8 text-lg font-semibold md:text-xl">
          {!! $post->post_excerpt !!}
        </p>
      @endif
    </div>
  </div>
</div>

@extends('layouts.app')

@section('content')

  @if (isset($_GET['all']) || isset($_GET['resourceProjectID']))
    @php
      query_posts([
          'post_type' => 'publication',
          'numberposts' => -1,
          'posts_per_page' => -1,
          'order' => isset($_GET['order']) ? $_GET['order'] : 'ASC',
      
          'orderby' => isset($_GET['orderby']) ? $_GET['orderby'] : 'date',
          'meta_query' => isset($_GET['resourceProjectID'])
              ? [
                  [
                      'key' => 'project',
                      'value' => '"' . $_GET['resourceProjectID'] . '"',
                      'compare' => 'LIKE',
                  ],
              ]
              : null,
      ]);
      
    @endphp

    <div class="container">
      <div class="flex flex-col max-w-3xl py-12 mx-auto mb-12 space-y-6 lg:space-y-12">
        <div class="inline-flex mt-12">
          <a class="" href="/">Home</a>
          <span class="px-3">&gt;</span>
          <a class="" href="/publications">Publications</a>
        </div>
        <h2 class="max-w-3xl font-bold text-4xl lg:text-5xl xl:text-6xl text-blue">
          @if (isset($_GET['resourceProjectID']))
            {{ get_post($_GET['resourceProjectID'])->post_title }} publications
          @else
            All publications
          @endif
        </h2>

        @if (!isset($_GET['resourceProjectID']))
          <div>
            <a href="?all&orderby=date&order=DESC"
              class="@if ('?' . $_SERVER['QUERY_STRING'] == '?all&orderby=date&order=DESC') bg-blue text-white @else bg-sky @endif px-4 py-2 text-xl leading-loose rounded-xl rounded-tr-none">Newest
              first</a>
            <a href="?all&orderby=title&order=ASC"
              class="@if ('?' . $_SERVER['QUERY_STRING'] == '?all&orderby=title&order=ASC') bg-blue text-white @else bg-sky @endif px-4 py-2 text-xl leading-loose rounded-xl rounded-tr-none">Alphabetical</a>

          </div>
        @endif

        @php global $wp_query @endphp
        <div class="max-w-3xl text-right">Found {{ $wp_query->found_posts }} publications</div>

        @while (have_posts())
          @php(the_post())
          @include('partials.publication-card')
        @endwhile
      </div>
    </div>
  @else
    @include('partials.section-header', [
        'background' => 'bg-sky',
        'text' => 'text-navy',
        'titletext' => 'text-blue',
    ])

    <div class="space-y-24 mb-48">

      <div class="container max-w-3xl mx-auto prose prose-xl">
        {!! $post->post_content !!}
      </div>

      <div class="bg-green bg-opacity-20 py-24">
        <form class="container max-w-3xl mx-auto" role="search" action="{{ home_url('/') }}" method="get"
          id="searchform">
          <h2 class="text-center mb-16 text-3xl font-bold lg:text-4xl text-blue">Find a publication</h2>
          <div class="flex flex-wrap px-8 gap-2 lg:gap-y-4 lg:gap-x-6">
            <input aria-label="Text to search for" type="text" name="s" placeholder="Search publications"
              class="focus:shadow-outline w-full px-6 py-5 text-xl leading-tight border border-opacity-50 border-green rounded-lg appearance-none focus:outline-none" />
            <input type="hidden" name="post_type" value="publication" />
            <select
              class="focus:shadow-outline w-full md:w-2/5 flex-grow px-6 py-4 text-xl border border-opacity-50 border-green rounded-lg focus:outline-none"
              name="post_resourcetype">
              <option value="">All publication types</option>
              @foreach ($types as $key => $type)
                <option value="{{ $type->term_id }}">{!! $type->name !!}</option>
              @endforeach
            </select>

            <select
              class="focus:shadow-outline w-full md:w-2/5 flex-grow px-6 py-4 text-xl border border-opacity-50 border-green rounded-lg focus:outline-none"
              name="post_areaoffocus">
              <option value="">All areas of focus</option>
              @foreach ($areas_of_focus as $key => $area_of_focus)
                <option value="{{ $area_of_focus->ID }}">{!! $area_of_focus->post_title !!}</option>
              @endforeach
            </select>

            <input
              class="mt-6 mx-auto bg-green inline-flex w-auto px-12 py-4 text-base text-center lowercase rounded-2xl rounded-tr-none appearance-none text-white focus:outline-none"
              type="submit" alt="Search" value="Search" />
          </div>
        </form>
      </div>

      @include('partials.latest-publications')
      @include('partials.areas-of-focus')
    </div>
  @endif
@endsection

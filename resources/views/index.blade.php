@extends('layouts.app', ['alternative_header' => true])

@section('content')
  @include('partials.section-header')

  <div class="container px-4 py-24 mx-auto xl:max-w-5xl">
    @if (!have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>
    @endif

    <!-- <form class="max-w-3xl mx-auto mb-24" role="search" action="{{ home_url('/') }}" method="get" id="searchform">
                <input type="hidden" name="post_type" value="post" />
                <div class="flex flex-wrap px-8 py-12 lg:flex-nowrap">
                  <input type="text" aria-label="Text to search for" name="s" placeholder="Search latest updates"
                    class="text-lg flex-1 inline-block rounded-l-lg p-4 border-2 border-blue">
                  <button type="submit"
                    class="bg-blue text-white border-2 text-base border-blue inline-block px-8 py-4 font-semibold rounded-br-lg whitespace-nowrap">
                    Search
                  </button>

                </div>
              </form> -->

    <div class="space-y-8 xl:space-y-12 max-w-4xl mx-auto">
      @while (have_posts())
        @php(the_post())
        @include('partials.post-card')
      @endwhile
    </div>

    <div class="mt-12">
      {!! get_the_posts_navigation() !!}
    </div>
  </div>
@endsection

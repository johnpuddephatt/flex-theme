@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="container min-h-screen my-12 xl:max-w-5xl 2xl:max-w-6xl">
    @if (!have_posts())
      <x-alert type="warning" class="mb-16">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>

      {!! get_search_form(false) !!}
    @endif

    <div class="space-y-6 lg:space-y-8">
      @php global $wp_query @endphp
      @if ($wp_query->found_posts)
        <div class="text-right">Found {{ $wp_query->found_posts }} results</div>
      @endif
      @while (have_posts())
        @php(the_post())
        @if (isset($_GET['post_type']) && $_GET['post_type'] == 'publication')
          @include('partials.publication-card')
        @elseif(isset($_GET['post_type']) && $_GET['post_type'] == 'post')
          @include('partials.post-card')
        @else
          @include('partials.content-search')
        @endif
      @endwhile
    </div>

    {!! the_posts_pagination() !!}
  </div>
@endsection

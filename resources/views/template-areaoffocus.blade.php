{{--
  Template Name: Area of Focus
--}}

@extends('layouts.app', ['alternative_header' => true])

@section('content')
  @while (have_posts())
    @php(the_post())
    <div class="flex flex-row w-full border-t border-sky">
      @include('partials.page-sidebar')
      <div class="flex-1">
        @include('partials.page-header')
        @includeFirst(['partials.content-page', 'partials.content-single'])

        @include('partials.related-publications')
        @include('partials.related-posts')

        @include('partials.page-siblings')
      </div>
    </div>
  @endwhile
@endsection

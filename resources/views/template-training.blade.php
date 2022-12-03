{{--
  Template Name: Temporary Training Template
--}}

@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    <div class="flex flex-row w-full border-t border-sky">
      <div class="flex-1">
        @include('partials.page-header')
        @includeFirst(['partials.content-page', 'partials.content-single'])
      </div>
    </div>
  @endwhile
@endsection

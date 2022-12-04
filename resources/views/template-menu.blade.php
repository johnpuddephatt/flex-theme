{{--
  Template Name: Menu page
--}}

@extends('layouts.app', ['alternative_header' => true])

@section('content')
  @while (have_posts())
    @php(the_post())
    <div class="flex flex-row w-full border-t border-sky"> @include('partials.page-sidebar')
      <div class="flex-1">
        @include('partials.page-header')

        <div class="container my-24 flex flex-col gap-6 mx-auto xl:max-w-5xl 2xl:py-32">
          @foreach ($children as $key => $page)
            @include('partials.page-card-alternative')
          @endforeach
        </div>

        @includeFirst(['partials.content-page', 'partials.content-single'])

        @include('partials.page-siblings')
      </div>
    </div>
  @endwhile
@endsection

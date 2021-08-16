@extends('layouts.app')

@section('content')
<div class="flex flex-row w-full border-t">
  @include('partials.resource-sidebar')
  <div class="flex-1">
    <div class="container flex flex-row max-w-5xl my-12">

      <div>

        <div class="inline-flex mt-12 mb-4 text-xl text-gray-500 md:mb-6">
          <a class="" href="/">Home</a>
          <span class="px-3">&gt;</span>
          <a class="" href="/resources">Resources</a>
        </div>

        <h2 class="font-serif text-6xl text-blue">
          {!! get_queried_object()->name !!}
        </h2>

        <p class="max-w-xl mt-8 text-lg font-medium leading-snug md:text-xl">{!!
          get_queried_object()->description !!}</p>
      </div>

      @svg('icons.' . get_field('icon', get_queried_object()->taxonomy . '_' . get_queried_object()->term_id),'w-48
      h-48 mt-12 ml-auto' )

    </div>
    <div class="bg-gray-100">
      <div class="container max-w-5xl py-24 space-y-8">

        @if (! have_posts())
        <x-alert type="warning">
          {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
        @endif
        @while(have_posts()) @php(the_post())
        @include('partials.resource-card')
        @endwhile
      </div>
    </div>
  </div>

</div>

@endsection
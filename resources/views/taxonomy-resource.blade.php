@extends('layouts.app')

@section('content')
  <div class="flex flex-row w-full border-t border-sky">
    @include('partials.publication-sidebar')
    <div class="flex-1">
      <div class="container flex flex-row my-12 xl:max-w-5xl 2xl:max-w-6xl">

        <div>

          <div class="text-gray-500 inline-flex mt-12 mb-4 lg:text-xl md:mb-6">
            <a class="" href="/">Home</a>
            <span class="px-3">&gt;</span>
            <a class="" href="/publications">Publications</a>
          </div>

          <h2 class="font-bold text-4xl lg:text-5xl xl:text-6xl text-blue">
            {!! get_queried_object()->name !!}
          </h2>

          <p class="max-w-xl mt-8 text-lg font-medium leading-snug md:text-xl">{!! get_queried_object()->description !!}</p>

        </div>

      </div>
      <div class="bg-gray-100">
        <div class="container py-24 space-y-8 xl:max-w-5xl 2xl:max-w-6xl">

          @php $wp_the_query = new WP_Query() @endphp
          <div class="max-w-3xl text-right">
            Found {{ get_queried_object()->count }} resources.
          </div>

          @if (!have_posts())
            <x-alert type="warning">
              {!! __('Sorry, no matching resources were found.', 'sage') !!}
            </x-alert>
          @endif

          @while (have_posts())
            @php(the_post())
            @include('partials.publication-card')
          @endwhile

          {!! the_posts_pagination() !!}
        </div>

      </div>
    </div>

  </div>
@endsection

@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    <div class="border-t border-sky">
      <div class="flex lg:gap-12 flex-col lg:flex-row lg:items-start container max-w-6xl pt-0 pb-16">

        @if (has_post_thumbnail($post && isset($post->ID) ? $post->ID : '') &&
            isset(
                wp_get_attachment_metadata(get_post_thumbnail_id($post && isset($post->ID) ? $post->ID : ''))['sizes']['16by9']))
          <div class="mx-auto mt-4 max-w-md lg:max-w-none lg:mt-16 w-full lg:w-2/5 relative">
            <div class="rounded-tl-flex align-top inline-block bg-orange w-2/3 pt-[66.67%]"></div>
            <div
              class="rounded-tr-flex rounded-bl-flex overflow-hidden relative inline-block bg-sky ml-[-35%] mt-[33.33%] w-2/3 pt-[66.67%]">
              {!! get_the_post_thumbnail(isset($post->ID) ? $post->ID : null, 'square', [
                  'class' => 'h-full w-full object-cover object-center inset-0 absolute',
              ]) !!}
            </div>

            <div class="hidden lg:block">
              @include('partials.entry-meta')
            </div>
          </div>
        @endif

        <div class="max-w-5xl">

          <div class="">

            <h2 class="pt-6 lg:pt-16 max-w-3xl font-bold text-3xl lg:text-4xl text-navy">
              {!! $title !!}
            </h2>
            @if (isset($post) && isset($post->post_type) && $post->post_type == 'post')
              <div class="mt-4 mb-12 text-xl font-semibold">
                {{ get_the_date() }}
              </div>
            @endif

            <div class="block -mt-8 lg:hidden">
              @include('partials.entry-meta')
            </div>

            <div class="prose max-w-none xl:prose-lg">
              @php(the_content())
            </div>

          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection

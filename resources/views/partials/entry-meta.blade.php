@if (get_the_author_meta('ID') !== 1)
  <div class="flex flex-row items-center py-4 lg:py-12">
    {!! get_avatar(get_the_author_meta('ID'), null, null, null, [
        'class' => 'max-w-none bg-sky object-cover w-12 h-12 lg:w-24 lg:h-24 mr-2 lg:mr-4 rounded-full',
    ]) !!}
    <div class="text-blue">
      <p class="text-lg lg:text-xl mb-1 font-bold">
        {{-- <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn"> --}}
        {{ get_the_author() }}
        {{-- </a> --}}
      </p>
      <p class="font-semibold">{{ carbon_get_user_meta(get_the_author_meta('ID'), 'user_role') }}
      </p>
    </div>
  </div>
@endif

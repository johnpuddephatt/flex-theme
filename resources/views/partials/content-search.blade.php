  <a href="{{ get_permalink() }}"
    class="t flex items-center flex-row justify-between bg-sky mb-4 md:mb-8 p-4 lg:p-8 2xl:p-12">
    <div class="max-w-xl">
      <header>
        <div class="text-violet-200 mb-2 font-bold">{{ get_the_date() }}</div>

        <x-heading level="2" class="mt-0 mb-4">
          {!! get_the_title() !!}
        </x-heading>

        @includeWhen(get_post_type() === 'post', 'partials/entry-meta')
      </header>

    </div>

  </a>

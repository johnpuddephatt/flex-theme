<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<div class="space-between relative z-30 container max-w-none py-2 flex md:py-12 lg:hidden">
  <x-logo />
  <button id="main-menu-button"
    class="relative z-50 inline-block my-auto px-6 py-3 ml-auto font-semibold bg-white border-2 rounded-2xl text-blue border-blue">
    Menu
  </button>
</div>

<div id="main-menu"
  class="bg-white transition fixed top-[1.25rem] bottom-0 z-20 w-screen overflow-y-auto left-full transform lg:static lg:bg-transparent">
  <div id="main-menu-container" class="flex flex-col-reverse justify-end overflow-y-auto lg:block">
    @if (!empty($secondaryNavigation))
      <header class="lg:border-b border-sky">
        <nav class="container max-w-none py-7">
          <ul class="flex flex-col lg:flex-row justify-end gap-8 xl:gap-16">
            @foreach ($secondaryNavigation as $link)
              <li>
                <a href="{{ $link->url }}" class="{{ $link->classes }} font-semibold">
                  {{ $link->label }}
                </a>
              </li>
            @endforeach
          </ul>
        </nav>
      </header>
    @endif

    @if (!empty($primaryNavigation))
      <div class="pt-2 max-w-none container flex justify-between flex-col lg:flex-row lg:items-end">
        <div class="invisible lg:visible">
          <img class="w-56 my-8" src="@asset('/images/FLEX-logo.svg')" alt="FLEX – Focus on Labour Exploitation">
        </div>

        <nav class="px-0 pt-4 lg:pt-6 pb-4 lg:pb-8 lg:text-xl">
          <ul class="flex flex-col lg:flex-row gap-8 xl:gap-16">
            @foreach ($primaryNavigation as $link)
              <li>
                <a href="{{ $link->url }}" class="{{ $link->classes }} lg:text-xl font-semibold">
                  {{ $link->label }}
                </a>
              </li>
            @endforeach
          </ul>
        </nav>
      </div>
    @endif
  </div>

</div>

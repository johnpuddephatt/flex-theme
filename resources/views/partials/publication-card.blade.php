@if (!isset($publication) || $publication)
  <a href="{{ get_permalink(isset($publication) ? $publication->ID : null) }}"
    class="my-2 lg:my-8 no-underline flex pr-8 flex-row items-center bg-sky rounded-tl-xl lg:rounded-tl-3xl overflow-hidden">
    <div class="bg-blue w-6 lg:w-36 lg:min-h-[9rem] rounded-br-xl self-stretch lg:rounded-br-3xl"></div>
    <div class="mr-auto max-w-2xl py-3 px-5 lg:px-10 flex-1 flex flex-col">
      <h3 class="!lg:text-xl !my-0 !text-black !mb-1 !text-lg !leading-tight font-semibold">
        {!! get_the_title(isset($publication) ? $publication->ID : null) !!}</h3>

      <span class="!text-sm">{{ get_the_date('F Y', isset($publication) ? $publication->ID : null) }}</span>
    </div>
    @svg('icons.arrow-right', 'text-blue h-8  w-8 my-auto')
  </a>
@endif

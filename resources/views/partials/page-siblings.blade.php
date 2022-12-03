@if($siblings)
<div class="border-t border-sky">
    <div class=" container my-24 mx-auto xl:max-w-5xl 2xl:py-32">
        <nav class="border-l-4 border-orange pl-8 ">
        <h3 class="pb-6 font-semibold text-xl ">More pages in this section</h3>
        
        @foreach($siblings as $page)
        <a class="flex items-center py-4 " href="{{ get_permalink($page->ID) }}">
            {!!
            get_the_title($page->ID)
            !!}</a>
        @endforeach
            </nav>
    </div>
</div>
@endif
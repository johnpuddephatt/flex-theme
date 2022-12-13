<div>
  <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-12">Areas of focus</h2>
  <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-8 container">
    @foreach ($areas_of_focus as $area_of_focus)
      <a class="bg-green bg-opacity-10 flex flex-row items-center" href="{{ get_permalink($area_of_focus->ID) }}">
        {!! get_the_post_thumbnail($area_of_focus->ID, 'post-thumbnail', [
            'class' => 'w-32 h-32 rounded-tr-3xl rounded-bl-3xl',
        ]) !!}
        <div class="p-6">
          <h3 class="font-semibold text-lg">{{ $area_of_focus->post_title }}</h3>
          <p class="text-sm">{{ $area_of_focus->post_excerpt }}</p>
        </div>

      </a>
    @endforeach
  </div>
</div>

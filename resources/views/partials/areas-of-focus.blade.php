<div>
  <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-12">Areas of focus</h2>
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 container">
    @foreach ($areas_of_focus as $area_of_focus)
      <a class="bg-green py-12 text-lg px-6 text-center font-semibold bg-opacity-10"
        href="{{ get_permalink($area_of_focus->ID) }}">{{ $area_of_focus->post_title }}</a>
    @endforeach
  </div>
</div>

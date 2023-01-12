<article
  @php(post_class())>
  <div class="container max-w-5xl mx-auto mb-16">
    <div class="prose max-w-none xl:prose-lg">
      @php(the_content())
    </div>
  </div>

  @if ($publication_files)
  <div class="bg-sky py-32">
    <div class="container max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold mb-12 text-navy">Downloads</h2>
      <div class="space-y-4">        
        @foreach ($publication_files as $file)
          <a href="{{ $file['url'] }}"
            class="flex  text-navy max-w-3xl items-stretch overflow-hidden">
            <div class="bg-white rounded-tl-flex overflow-hidden">
              <div class="w-32 h-32 bg-blue  rounded-br-flex"></div>
            </div>
            <div class="py-6 px-12 flex-1 bg-white flex flex-col">
              <h3 class="mb-1 font-semibold text-lg">{!! $file['title'] !!}</h3>
              <p>{{ get_the_excerpt($file['ID']) }}</p>
            </div>
            <div class="bg-white pr-8 flex flex-col justify-center">
            @svg('icons.arrow-right', 'h-8 w-8 text-navy my-auto')

          </div>
          </a>
        @endforeach
      </div>
      
  </div>
  </div>
  @endif
  </article>

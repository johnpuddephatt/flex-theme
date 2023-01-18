<article
  @php(post_class())>
  <div class="container max-w-5xl mx-auto mb-16">
    <div class="prose max-w-none xl:prose-lg">
      @php(the_content())
    </div>
  </div>

  @if ($publication_files)
  <div class="bg-orange bg-opacity-10 py-32">
    <div class="container max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold mb-12 text-navy">Downloads</h2>
      <div class="space-y-4">        
        @foreach ($publication_files as $file)
          <a href="{{ $file['url'] }}"
            class="flex text-navy max-w-3xl items-stretch overflow-hidden">
            <div class="bg-orange bg-opacity-20 rounded-tl-flex overflow-hidden">
              <div class="w-32 h-32 bg-orange rounded-br-flex"></div>
            </div>
            <div class="py-6 px-12 flex-1 bg-orange bg-opacity-20 flex flex-col">
              <h3 class="mb-1 font-semibold text-lg">{!! $file['title'] !!}</h3>
              <p>{{ get_the_excerpt($file['ID']) }}</p>
            </div>
            <div class="bg-orange bg-opacity-20 pr-8 flex flex-col justify-center">
            @svg('icons.arrow-right', 'h-8 w-8 text-orange my-auto')

          </div>
          </a>
        @endforeach
      </div>
      
  </div>
  </div>
  @endif
  </article>

<article @php(post_class('lg:ml-[33.333%] lg:pl-10'))>
  <div class="container max-w-3xl mx-0 mb-32">

    <div class="prose max-w-none xl:prose-lg">
      @php(the_content())
    </div>
  </div>

  @php(comments_template())
</article>

<article @php(post_class())>
  <div class="container max-w-5xl mx-auto mb-32">

    <div class="prose max-w-none xl:prose-lg">
      @php(the_content())
    </div>
  </div>

  @php(comments_template())
</article>

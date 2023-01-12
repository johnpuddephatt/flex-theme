<div>
  <?php if(has_post_thumbnail($post && isset($post->ID) ? $post->ID : '') &&
      isset(
          wp_get_attachment_metadata(get_post_thumbnail_id($post && isset($post->ID) ? $post->ID : ''))['sizes'][
              'square'
          ])): ?>
    <div class="lg:w-[50vw] max-w-5xl lg:ml-auto w-full ml-4">
      <?php echo get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', '16by9', [
          'class' => ' w-full rounded-bl-flex169',
      ]); ?>

    </div>
  <?php else: ?>
    <div class="h-20"></div>
  <?php endif; ?>

  <div class="container xl:max-w-5xl 2xl:max-w-6xl">

    <div class="">
      <?php if(isset($post) && isset($post->post_type) && $post->post_type == 'post'): ?>
        <div class="mb-4 text-xl font-bold md:text-2xl md:mb-8">
          <?php echo e(get_the_date()); ?>

        </div>
      <?php elseif(isset($parent)): ?>
        <div class="inline-flex mt-6 mb-4 md:mb-6">
          <a class="" href="/">Home</a>
          <span class="px-3">&gt;</span>
          <a class="" href="<?php echo e($parent->permalink); ?>"><?php echo $parent->title; ?></a>
        </div>
      <?php endif; ?>

      <h2 class="max-w-3xl font-bold text-4xl lg:text-5xl xl:text-6xl text-blue">
        <?php echo $title; ?>

      </h2>

      <?php if(!empty($post->post_excerpt)): ?>
        <p class="max-w-3xl my-8 text-lg font-semibold md:text-xl">
          <?php echo $post->post_excerpt; ?>

        </p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/page-header.blade.php ENDPATH**/ ?>
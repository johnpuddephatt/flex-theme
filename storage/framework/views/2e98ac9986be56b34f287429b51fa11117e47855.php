<div>

  <?php if(has_post_thumbnail($post && isset($post->ID) ? $post->ID : '') &&
      isset(
          wp_get_attachment_metadata(get_post_thumbnail_id($post && isset($post->ID) ? $post->ID : ''))['sizes']['16by9'])): ?>
    <div class="w-1/2">
      <?php echo get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', '16by9', [
          'class' => ' w-full rounded-br-big',
      ]); ?>

    </div>
  <?php else: ?>
    <div class="h-24"></div>
  <?php endif; ?>

  <div class="container max-w-5xl mb-24">

    <div class="">

      <h2 class="mt-12 max-w-3xl font-bold text-4xl lg:text-5xl xl:text-6xl text-blue">
        <?php echo $title; ?>

      </h2>
      <?php if(isset($post) && isset($post->post_type) && $post->post_type == 'post'): ?>
        <!-- <a class="text-gray-600 inline-block mb-8" href="<?php echo e(get_permalink(get_option('page_for_posts'))); ?>">&larr; Back to
          all posts</a> -->

        <div class="mt-6 mb-4 text-xl font-semibold md:mb-4">
          <?php echo e(get_the_date()); ?>

        </div>
      <?php endif; ?>

      <?php if(!empty($post->post_excerpt)): ?>
        <p class="max-w-3xl mt-8 text-xl font-semibold">
          <?php echo $post->post_excerpt; ?>

        </p>
        <?php endif; ?> <?php if(get_the_author_meta('ID') != 1): ?>
          <div class="flex items-center py-2 mt-8">
            <?php echo get_avatar(get_the_author_meta('ID'), 32, null, 'Profile image for ' . get_the_author(), [
                'class' => "object-cover w-10 h-10 mr-2
                                                                                                                                                                                                                                                                                                                                                                                                        rounded-full",
            ]); ?>

            <div class="leading-tight">
              <p class="text-sm font-semibold tracking-tight text-black">
                <a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author" class="fn">
                  <?php echo e(get_the_author()); ?>

                </a>
              </p>
              <?php if(get_field('role', 'user_' . get_the_author_meta('ID'))): ?>
                <p class="text-gray-600 text-sm font-normal tracking-tight">
                  <?php echo e(the_field('role', 'user_' . get_the_author_meta('ID'))); ?>

                </p>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
    </div>
  </div>
</div>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/header.blade.php ENDPATH**/ ?>
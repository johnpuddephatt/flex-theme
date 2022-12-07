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
      <div class="inline-flex mt-1 mb-4 md:mb-6">
        <a class="" href="/">Home</a>
        <span class="px-3">&gt;</span>
        <a class="" href="<?php echo e(get_permalink(get_option('page_for_publications'))); ?>">Publications</a>
      </div>
      <h2 class="max-w-3xl font-bold text-4xl lg:text-5xl text-blue">
        <?php echo $title; ?>

      </h2>

      <div class="mt-4 mb-6 text-xl font-semibold text-navy md:mb-4">
        <?php echo e(get_the_date()); ?>

      </div>

      <?php if(get_the_terms($post->ID, 'resourcetype')): ?>
        <div class="mt-4 mb-6 flex flex-row gap-2">
          <?php $__currentLoopData = get_the_terms($post->ID, 'resourcetype'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(get_term_link($type->term_id, 'resourcetype')); ?>"
              class="bg-orange bg-opacity-10 rounded-lg px-6 text-sm py-2 font-semibold"><?php echo e($type->name); ?></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($post->post_excerpt)): ?>
        <p class="max-w-2xl mt-8 text-lg font-semibold md:text-xl">
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
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/publication-header.blade.php ENDPATH**/ ?>
<a href="<?php echo e(get_permalink($post_id ?? null)); ?>"
  <?php (post_class('flex  my-4 flex-row block bg-sky !no-underline max-w-[48rem]')); ?>>
  <div class="flex-grow flex flex-col py-4 lg:py-8 px-6  lg:px-10 !text-navy">
  <div class="!mb-4 font-semibold "><?php echo e(get_the_date(null, $post_id ?? null)); ?></div>
  <h3 class="!mt-0 mb-4 !text-lg !text-navy xl:!leading-tight !leading-tight font-semibold lg:!text-xl">
    <?php echo get_the_title($post_id ?? null); ?>

  </h3>
  
  <div class="mt-auto text-base pt-6 font-semibold leading-none ">Read more</div>
  </div>
    <?php if(has_post_thumbnail($post_id ?? null)): ?>
    <?php echo get_the_post_thumbnail($post_id ?? null, 'square', [
        'class' => '!my-0 object-cover object-center rounded-bl-flex w-72 h-72 hidden lg:block flex-none',
    ]); ?>

    <?php else: ?>
    <div class="flex-none hidden lg:block rounded-bl-flex w-72 h-72 bg-sky"></div>
    <?php endif; ?>
  </a>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/post-card.blade.php ENDPATH**/ ?>
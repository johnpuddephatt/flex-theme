<?php if($area_of_focus && get_post_status($area_of_focus)): ?>
  <a href="<?php echo e(get_permalink($area_of_focus)); ?>"
    class="!no-underline my-16 flex flex-col lg:flex-row bg-navy text-white rounded-bl-medium rounded-tr-medium overflow-hidden">
    <?php echo get_the_post_thumbnail($area_of_focus, 'square', [
        'class' => '!my-0 w-full lg:w-60 object-cover object-center flex-shrink-0 h-auto',
    ]); ?>

    <div class="p-8 lg:px-16 flex-1">
      <h3 class="!mt-0 !mb-2 text-white text-3xl font-semibold"><?php echo e(get_the_title($area_of_focus)); ?></h3>
      <p class="text-white leading-normal text-sm"><?php echo e(get_the_excerpt($area_of_focus)); ?></p>
      <span
        class="inline-block mt-4 border-2 hover:bg-green hover:bg-opacity-30 border-green px-6 py-2 text-xs font-semibold rounded-xl rounded-tr-none whitespace-nowrap">Read
        more</span>
    </div>
  </a>
<?php endif; ?>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/area-of-focus-block.blade.php ENDPATH**/ ?>
<?php if($area_of_focus && get_post_status($area_of_focus)): ?>
  <a href="<?php echo e(get_permalink($area_of_focus)); ?>"
    class="!no-underline my-16 flex flex-col items-stretch lg:flex-row text-white overflow-hidden">
    <div
      class="rounded-tl-flex bg-navy via-transparent bg-gradient-to-tl from-transparent to-white overflow-hidden -mr-px">
      <?php echo get_the_post_thumbnail($area_of_focus, 'square', [
          'class' => 'isolate !my-0 w-full lg:w-48 object-cover object-center rounded-br-flex flex-shrink-0 h-auto',
      ]); ?>

    </div>
    <div class="p-4 px-8 lg:px-12 flex flex-1 bg-navy flex-col items-start justify-center">
      <h3 class="!mt-0 !mb-2 !text-white text-3xl font-semibold"><?php echo get_the_title($area_of_focus); ?></h3>
      <p class="text-white !mb-4 leading-normal text-base"><?php echo get_the_excerpt($area_of_focus); ?></p>
      <span
        class="inline-block mt-0 border-2 hover:bg-green border-green px-6 py-2 text-sm lowercase font-semibold rounded-xl rounded-tr-none whitespace-nowrap">Read
        more</span>
    </div>
  </a>
<?php endif; ?>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/area-of-focus-block.blade.php ENDPATH**/ ?>
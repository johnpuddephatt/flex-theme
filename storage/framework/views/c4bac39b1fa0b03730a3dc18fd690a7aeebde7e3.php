<?php $__env->startSection('content'); ?>
  <div class="flex flex-row w-full border-t border-sky">
    <?php if ($__env->exists('partials.' . get_post_type() . '-sidebar')) echo $__env->make('partials.' . get_post_type() . '-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex-1">
      <div class="">
        <?php while(have_posts()): ?>
          <?php (the_post()); ?>
          <?php echo $__env->first(['partials.' . get_post_type() . '-header', 'partials.header'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->first(['partials.content-single-' . get_post_type(), 'partials.content-single'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endwhile; ?>
      </div>

      <?php if ($__env->exists('partials.' . get_post_type() . '-siblings')) echo $__env->make('partials.' . get_post_type() . '-siblings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/single.blade.php ENDPATH**/ ?>
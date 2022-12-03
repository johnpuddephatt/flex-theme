<div>
  <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-12">Areas of focus</h2>
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 container">
    <?php $__currentLoopData = $areas_of_focus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area_of_focus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="bg-green py-12 text-lg px-6 text-center font-semibold bg-opacity-10"
        href="<?php echo e(get_permalink($area_of_focus->ID)); ?>"><?php echo e($area_of_focus->post_title); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/areas-of-focus.blade.php ENDPATH**/ ?>
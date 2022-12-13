<div>
  <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-12">Areas of focus</h2>
  <div class="grid md:grid-cols-2 gap-4 lg:gap-8 container">
    <?php $__currentLoopData = $areas_of_focus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area_of_focus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="bg-green bg-opacity-10 flex flex-row items-center" href="<?php echo e(get_permalink($area_of_focus->ID)); ?>">
        <?php echo get_the_post_thumbnail($area_of_focus->ID, null, [
            'class' => 'flex-none w-24 h-24 lg:w-32 lg:h-32 rounded-tr-3xl rounded-bl-3xl',
        ]); ?>

        <div class="py-3 px-6">
          <h3 class="font-semibold text-lg"><?php echo e($area_of_focus->post_title); ?></h3>
          <p class="text-sm"><?php echo e($area_of_focus->post_excerpt); ?></p>
        </div>

      </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/areas-of-focus.blade.php ENDPATH**/ ?>
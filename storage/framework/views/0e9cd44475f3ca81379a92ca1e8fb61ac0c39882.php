<?php if($publications && count($publications)): ?>
  <div class="container xl:max-w-5xl 2xl:max-w-6xl">
    <h3 class="border-t border-sky pt-12 pb-8 text-2xl font-bold text-navy">Related publications</h3>
    <div class="space-y-4">
      <?php $__currentLoopData = $publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.publication-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/area-of-focus-publications.blade.php ENDPATH**/ ?>
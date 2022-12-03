<?php if($posts && count($posts)): ?>
  <div class="container py-16 xl:max-w-5xl">
    <h3 class="border-t border-sky pt-12 pb-8 text-2xl font-bold mb-4 text-navy">Related updates</h3>
    <div class="mb-8 space-y-4">

      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.post-card', ['post_id' => $post->ID], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/area-of-focus-posts.blade.php ENDPATH**/ ?>
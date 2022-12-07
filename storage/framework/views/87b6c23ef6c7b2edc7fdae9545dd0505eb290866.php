<article
  <?php (post_class()); ?>>
  <div class="container max-w-5xl mx-auto mb-16">
    <div class="prose max-w-none xl:prose-lg">
      <?php (the_content()); ?>
    </div>
  </div>

  <div class="bg-orange bg-opacity-10 py-32">
    <div class="container max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold mb-12 text-navy">Downloads</h2>

      <?php if(rwmb_get_value('file_advanced', null, null, false)): ?>
      <div class="space-y-4">        
        <?php $__currentLoopData = rwmb_get_value('file_advanced', null, null, false); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e($file['url']); ?>"
            class="flex bg-orange text-navy max-w-3xl bg-opacity-20 rounded-tl-medium pr-8 overflow-hidden">
            <div class="w-32 h-32 bg-orange rounded-br-medium"></div>
            <div class="py-6 px-12 flex-1">
              <h3 class="mb-3 font-semibold text-lg"><?php echo $file['title']; ?></h3>
              <p><?php echo e(get_the_excerpt($file['ID'])); ?></p>
            </div>
            <?php echo e(get_svg('icons.arrow-right')); ?>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php endif; ?>
  </div>
  </div>
</article>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/content-single-publication.blade.php ENDPATH**/ ?>
<?php if($siblings): ?>
  <aside class="hidden pt-24 pb-12 border-r border-sky xl:block">
    <nav class="">
      <h2 class="pl-0 2xl:pl-0 px-6 mb-6 text-xl font-semibold 2xl:px-8">
        <a class="pl-10 2xl:pl-12 block mx-auto mr-16 w-60" href=" <?php echo e($parent->permalink); ?>">
          <?php echo $parent->title; ?>

        </a>
      </h2>
      <?php $__currentLoopData = $siblings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class="<?php if(get_permalink() == get_permalink($page->ID)): ?> bg-opacity-100 text-navy <?php else: ?> hover:bg-opacity-100 bg-opacity-0 <?php endif; ?> pl-0 px-6 2xl:pl-0 2xl:px-8 block py-1.5 text-lg bg-sky transition"
          href="<?php echo e(get_permalink($page->ID)); ?>">
          <span class="pl-10 2xl:pl-12 block mx-auto mr-4 w-72"><?php echo get_the_title($page->ID); ?></span>
        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </nav>
  </aside>
<?php endif; ?>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/page-sidebar.blade.php ENDPATH**/ ?>
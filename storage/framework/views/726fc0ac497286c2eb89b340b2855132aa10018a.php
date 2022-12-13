<aside class="hidden pt-24 pb-12 border-r border-sky lg:block">
  <nav class="">
    <h2 class="pl-0 2xl:pl-0 px-6 text-xl font-semibold 2xl:px-8">
      <a class="pl-10 2xl:pl-12 block mx-auto mr-16 w-60" href="<?php echo e(get_permalink(get_option('page_for_publications'))); ?>">
        Publications
      </a>
    </h2>

    <div class="mt-12 pl-0 2xl:pl-0 px-6 2xl:px-8 mb-3 font-semibold text-green">
      <span class="pl-10 2xl:pl-12 block mx-auto mr-16 w-60">Browse by
        type</span>
    </div>
    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="<?php if(get_term_link(get_queried_object_id()) == get_term_link($type->term_id, 'resourcetype')): ?> bg-opacity-100 text-navy <?php else: ?> hover:bg-opacity-30 bg-opacity-0 <?php endif; ?> pl-0 px-6 2xl:pl-0 2xl:px-8 block py-3 text-lg bg-sky transition"
        href="<?php echo e(get_term_link($type->term_id, 'resourcetype')); ?>">
        <span class="pl-10 2xl:pl-12 block mx-auto mr-4 w-72"><?php echo get_term($type->term_id)->name; ?></span>
      </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="mt-12 pl-0 2xl:pl-0 px-6 2xl:px-8 mb-3 font-semibold text-green">
      <span class="pl-10 2xl:pl-12 block mx-auto mr-16 w-60">Browse by
        area</span>
    </div>
    <?php $__currentLoopData = $areas_of_focus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area_of_focus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="hover:bg-opacity-30 bg-opacity-0 pl-0 px-6 2xl:pl-0 2xl:px-8 block py-3 text-lg bg-sky transition"
        href="<?php echo e(get_permalink($area_of_focus->ID)); ?>">

        <span class="pl-10 2xl:pl-12 block mx-auto mr-4 w-72"><?php echo $area_of_focus->post_title; ?></span>
      </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </nav>
</aside>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/publication-sidebar.blade.php ENDPATH**/ ?>
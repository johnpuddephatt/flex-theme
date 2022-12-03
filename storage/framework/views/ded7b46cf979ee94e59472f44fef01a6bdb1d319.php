<?php $__env->startSection('content'); ?>
<?php while(have_posts()): ?> <?php (the_post()); ?>
<?php echo $__env->make('partials.section-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.section-navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['alternative_header' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/template-section.blade.php ENDPATH**/ ?>
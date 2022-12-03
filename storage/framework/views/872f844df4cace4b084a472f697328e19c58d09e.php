<?php echo $__env->make('svg-paths', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.site-header', ['alternative_header' => $alternative_header ?? false ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main id="main" class="w-screen overflow-x-hidden main">
  <?php echo $__env->yieldContent('content'); ?>
</main>

<?php echo $__env->make('partials.site-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/layouts/app.blade.php ENDPATH**/ ?>
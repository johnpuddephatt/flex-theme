<?php $__env->startSection('content'); ?>
  <div class="flex flex-row w-full border-t border-sky">
    <?php echo $__env->make('partials.publication-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex-1">
      <div class="container flex flex-row my-12 xl:max-w-5xl">

        <div>

          <div class="text-gray-500 inline-flex mt-12 mb-4 lg:text-xl md:mb-6">
            <a class="" href="/">Home</a>
            <span class="px-3">&gt;</span>
            <a class="" href="/publications">Publications</a>
          </div>

          <h2 class="font-bold text-4xl lg:text-5xl xl:text-6xl text-blue">
            <?php echo get_queried_object()->name; ?>

          </h2>

          <p class="max-w-xl mt-8 text-lg font-medium leading-snug md:text-xl"><?php echo get_queried_object()->description; ?></p>

        </div>

      </div>
      <div class="bg-gray-100">
        <div class="container py-24 space-y-8 xl:max-w-5xl">

          <?php $wp_the_query = new WP_Query() ?>
          <div class="max-w-3xl text-right">
            Found <?php echo e(get_queried_object()->count); ?> resources.
          </div>

          <?php if(!have_posts()): ?>
             <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'warning']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
              <?php echo __('Sorry, no matching resources were found.', 'sage'); ?>

             <?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
          <?php endif; ?>

          <?php while(have_posts()): ?>
            <?php (the_post()); ?>
            <?php echo $__env->make('partials.publication-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endwhile; ?>

          <?php echo the_posts_pagination(); ?>

        </div>

      </div>
    </div>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/taxonomy-resource.blade.php ENDPATH**/ ?>
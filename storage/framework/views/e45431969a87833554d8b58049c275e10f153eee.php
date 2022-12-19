<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.section-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="container px-4 py-24 mx-auto xl:max-w-5xl">
    <?php if(!have_posts()): ?>
       <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'warning']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        <?php echo __('Sorry, no results were found.', 'sage'); ?>

       <?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
    <?php endif; ?>

    <!-- <form class="max-w-3xl mx-auto mb-24" role="search" action="<?php echo e(home_url('/')); ?>" method="get" id="searchform">
            <input type="hidden" name="post_type" value="post" />
            <div class="flex flex-wrap px-8 py-12 lg:flex-nowrap">
              <input type="text" aria-label="Text to search for" name="s" placeholder="Search latest updates"
                class="text-lg flex-1 inline-block rounded-l-lg p-4 border-2 border-blue">
              <button type="submit"
                class="bg-blue text-white border-2 text-base border-blue inline-block px-8 py-4 font-semibold rounded-br-lg whitespace-nowrap">
                Search
              </button>

            </div>
          </form> -->

    <div class="space-y-8 xl:space-y-16 max-w-4xl mx-auto">
      <?php while(have_posts()): ?>
        <?php (the_post()); ?>
        <?php echo $__env->make('partials.post-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endwhile; ?>
    </div>

    <div class="mt-16">
      <?php echo get_the_posts_navigation(); ?>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['alternative_header' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/index.blade.php ENDPATH**/ ?>
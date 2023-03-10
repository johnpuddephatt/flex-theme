<?php $__env->startSection('content'); ?>
  <div class="flex flex-row border-t border-sky">
    <?php if(isset($_GET['post_areaoffocus']) &&
        $_GET['post_areaoffocus'] &&
        isset($_GET['s']) &&
        isset($_GET['post_resourcetype']) &&
        !$_GET['s'] &&
        !$_GET['post_resourcetype']): ?>
      <?php
        $title = get_post($_GET['post_areaoffocus'])->post_title;
      ?>
    <?php endif; ?>

    <?php if(isset($_GET['post_type']) && $_GET['post_type'] == 'publication'): ?>
      <?php echo $__env->make('partials.publication-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <div class="flex-grow">
      <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="container min-h-screen my-12 xl:max-w-5xl 2xl:max-w-6xl">
        <?php if(!have_posts()): ?>
           <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'warning']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-16']); ?>
            <?php echo __('Sorry, no results were found.', 'sage'); ?>

           <?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

          <?php echo get_search_form(false); ?>

        <?php endif; ?>

        <div class="space-y-6 lg:space-y-8">
          <?php global $wp_query ?>
          <?php if($wp_query->found_posts): ?>
            <div class="text-right">Found <?php echo e($wp_query->found_posts); ?> results</div>
          <?php endif; ?>
          <?php while(have_posts()): ?>
            <?php (the_post()); ?>
            <?php if(isset($_GET['post_type']) && $_GET['post_type'] == 'publication'): ?>
              <?php echo $__env->make('partials.publication-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php elseif(isset($_GET['post_type']) && $_GET['post_type'] == 'post'): ?>
              <?php echo $__env->make('partials.post-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
              <?php echo $__env->make('partials.content-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
          <?php endwhile; ?>
        </div>

        <?php echo the_posts_pagination(); ?>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/search.blade.php ENDPATH**/ ?>
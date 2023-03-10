  <a href="<?php echo e(get_permalink()); ?>"
    class="t flex items-center flex-row justify-between bg-sky mb-4 md:mb-8 p-4 lg:p-8 2xl:p-12">
    <div class="max-w-xl">
      <header>
        <div class="text-violet-200 mb-2 font-bold"><?php echo e(get_the_date()); ?></div>

         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.heading','data' => ['level' => '2','class' => 'mt-0 mb-4']]); ?>
<?php $component->withName('heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['level' => '2','class' => 'mt-0 mb-4']); ?>
          <?php echo get_the_title(); ?>

         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

        <?php echo $__env->renderWhen(get_post_type() === 'post', 'partials/entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
      </header>

    </div>

  </a>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/content-search.blade.php ENDPATH**/ ?>
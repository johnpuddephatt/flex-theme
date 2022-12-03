<article <?php (post_class('flex items-center flex-row justify-between bg-black body-font text-white mb-4 md:mb-8 p-4
  lg:p-8 2xl:p-12')); ?>>
  <div class="max-w-xl ">
    <header>
      <a href="<?php echo e(get_permalink()); ?>">
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
      </a>

      <?php echo $__env->renderWhen(get_post_type() === 'post', 'partials/entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
    </header>

    <div class="mb-2 font-bold text-violet-200"><?php echo e(get_the_date()); ?></div>

    <div class="hidden text-sm leading-relaxed md:block">
      <?php echo get_the_excerpt(); ?>

    </div>
  </div>
  <a href="<?php echo e(get_permalink()); ?>">
     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icon.arrow-right','data' => ['class' => 'flex-shrink-0 w-16 h-16 -mr-4 md:w-32 md:h-32 text-violet-300']]); ?>
<?php $component->withName('icon.arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 w-16 h-16 -mr-4 md:w-32 md:h-32 text-violet-300']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
  </a>
</article><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/content-search.blade.php ENDPATH**/ ?>
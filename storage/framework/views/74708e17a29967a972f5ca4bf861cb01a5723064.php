<a class="sr-only focus:not-sr-only" href="#main">
  <?php echo e(__('Skip to content')); ?>

</a>

<div class="space-between relative z-30 container max-w-none py-2 flex md:py-12 lg:hidden">
   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.logo','data' => []]); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
  <button id="main-menu-button"
    class="relative z-50 inline-block my-auto px-6 py-3 ml-auto font-semibold bg-white border-2 rounded-2xl text-blue border-blue">
    Menu
  </button>
</div>

<div id="main-menu"
  class="bg-white transition fixed top-[1.25rem] bottom-0 z-20 w-screen overflow-y-auto left-full transform lg:static lg:bg-transparent">
  <div id="main-menu-container" class="flex flex-col-reverse justify-end overflow-y-auto lg:block">
    <?php if(!empty($secondaryNavigation)): ?>
      <header class="lg:border-b border-sky">
        <nav class="container max-w-none py-7">
          <ul class="flex flex-col lg:flex-row justify-end gap-8 xl:gap-16">
            <?php $__currentLoopData = $secondaryNavigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <a href="<?php echo e($link->url); ?>" class="<?php echo e($link->classes); ?> font-semibold">
                  <?php echo e($link->label); ?>

                </a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </nav>
      </header>
    <?php endif; ?>

    <?php if(!empty($primaryNavigation)): ?>
      <div class="pt-2 max-w-none container flex justify-between flex-col lg:flex-row lg:items-end">
        <div class="invisible lg:visible">
           <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.logo','data' => []]); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
        </div>

        <nav class="px-0 pt-4 lg:pt-6 pb-4 lg:pb-8 lg:text-xl">
          <ul class="flex flex-col lg:flex-row gap-8 xl:gap-16">
            <?php $__currentLoopData = $primaryNavigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <a href="<?php echo e($link->url); ?>" class="<?php echo e($link->classes); ?> lg:text-xl font-semibold">
                  <?php echo e($link->label); ?>

                </a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </nav>
      </div>
    <?php endif; ?>
  </div>

</div>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/site-header.blade.php ENDPATH**/ ?>
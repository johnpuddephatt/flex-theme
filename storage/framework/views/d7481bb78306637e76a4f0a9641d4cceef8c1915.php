<footer class="antialiased bg-blue text-white text-center md:text-left">

  <div class="container max-w-none pt-24 pb-16">
    <div class="flex flex-wrap gap-4">
      <div class="flex-shrink w-full mt-3 md:w-1/2">
        <p class="mb-6 text-2xl font-semibold text-white"><?php echo e(get_bloginfo('description')); ?></p>

        <?php if(carbon_get_theme_option('address')): ?>
          <p class="site-footer--address contact-address mb-1 text-base"><?php echo nl2br(strip_tags(carbon_get_theme_option('address'))); ?></p>
        <?php endif; ?>

        <p class="text-base">
          <?php if(carbon_get_theme_option('companyemail')): ?>
            <a class="site-footer--email contact-email mb-4"
              href="mailto:<?php echo e(carbon_get_theme_option('companyemail')); ?>"><?php echo e(carbon_get_theme_option('companyemail')); ?></a>
          <?php endif; ?>
          <?php if(carbon_get_theme_option('companyemail') && carbon_get_theme_option('companyphone')): ?>
            |
          <?php endif; ?>
          <?php if(carbon_get_theme_option('companyphone')): ?>
            <a class="site-footer--phone contact-phone"
              href="tel:<?php echo e(carbon_get_theme_option('companyphone')); ?>"><?php echo e(carbon_get_theme_option('companyphone')); ?></a>
          <?php endif; ?>
        </p>

        <p class="text-gray-300 company-info mt-6 text-sm">
          Flex is a registered charity.
          <?php if(carbon_get_theme_option('charitynumber')): ?>
            Charity no. <?php echo e(carbon_get_theme_option('charitynumber')); ?>

          <?php endif; ?>
          <?php if(carbon_get_theme_option('companynumber')): ?>
            | Company no. <?php echo e(carbon_get_theme_option('companynumber')); ?>

        </p>
        <?php endif; ?>
        </p>
      </div>

      <div class="ml-auto md:w-1/3 h-full flex flex-col">
        <div class="flex items-start justify-center md:justify-end flex-row gap-2 mt-4">
          <?php $__currentLoopData = ['facebook', 'twitter', 'youtube', 'instagram', 'linkedin', 'vimeo']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(get_option('_' . $account)): ?>
              <a rel="noopener" class="text-axis-green bg-white text-blue inline-block rounded-full p-2"
                aria-label="<?php echo e($account); ?> link" href="<?php echo e(get_option('_' . $account)); ?>" target="_blank">
                 <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => 'icon.' . $account]); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mt-4']); ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
              </a>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php if(carbon_get_theme_option('footer_text')): ?>
          <p class="mt-auto pt-16 text-sm"><?php echo e(carbon_get_theme_option('footer_text')); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/site-footer.blade.php ENDPATH**/ ?>
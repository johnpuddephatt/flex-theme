<?php if(get_the_author_meta('ID') !== 1): ?>
  <div class="flex flex-row items-center py-4 lg:py-12">
    <?php echo get_avatar(get_the_author_meta('ID'), null, null, null, [
        'class' => 'max-w-none bg-sky object-cover w-12 h-12 lg:w-24 lg:h-24 mr-2 lg:mr-4 rounded-full',
    ]); ?>

    <div class="text-blue">
      <p class="text-lg lg:text-xl mb-1 font-bold">
        <?php echo e(get_the_author()); ?>

      </p>
      <p class="font-semibold"><?php echo e(carbon_get_user_meta(get_the_author_meta('ID'), 'user_role')); ?>

      </p>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/entry-meta.blade.php ENDPATH**/ ?>
<?php
  $colours = [
      'Report' => [
          'background' => 'green',
          'border' => 'sky',
          'text' => 'white',
      ],
      'Briefing' => [
          'background' => 'sky',
          'border' => 'green',
          'text' => 'blue',
      ],
  ];
?>

<div class="">
  <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-12">Latest publications</h2>
  <div class="overflow-x-auto">
    <div class="grid grid-cols-3 gap-16 container w-[250%] lg:w-full">
      <?php $__currentLoopData = $latest_publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $name = get_the_terms($publication->ID, 'resourcetype')[0]->name; ?>
        <a href="<?php echo e(get_permalink($publication->ID)); ?>"
          class="bg-<?php echo e($colours[$name]['background']); ?> text-<?php echo e($colours[$name]['text']); ?> border-<?php echo e($colours[$name]['border']); ?> justify-between antialiased aspect-[3/4] flex flex-col py-12 px-6 border-l-[1.25rem]">
          <h3 class="text-3xl font-bold"><?php echo e($publication->post_title); ?></h3>

          <p class="pt-6 mt-auto font-semibold text-xl">
            <?php echo e(get_the_terms($publication->ID, 'resourcetype')[0]->name); ?>

          </p>
        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/latest-publications.blade.php ENDPATH**/ ?>
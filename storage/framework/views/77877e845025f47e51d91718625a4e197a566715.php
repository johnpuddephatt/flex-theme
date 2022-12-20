<?php
  $colours = [
      'DEFAULT' => [
          'background' => 'white',
          'border' => 'black',
          'text' => 'black',
      ],
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

<div class="text-center">
  <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-12">Latest publications</h2>
  <div class="overflow-x-auto lg:overflow-x-hidden pb-6">
    <div class="text-left grid grid-cols-3 gap-8 xl:gap-16 container max-w-none w-[200%] md:w-[150%] xl:w-full">
      <?php $__currentLoopData = $latest_publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $category = get_the_terms($publication->ID, 'resourcetype') ? get_the_terms($publication->ID, 'resourcetype')[0] : null; ?>
        <div class="text-center">
          <a href="<?php echo e(get_permalink($publication->ID)); ?>"
            <?php if($category): ?> style="background-color: <?php echo e(carbon_get_term_meta($category->term_id, 'resourcetype_background')); ?>; color: <?php echo e(carbon_get_term_meta($category->term_id, 'resourcetype_text')); ?>; border-color: <?php echo e(carbon_get_term_meta($category->term_id, 'resourcetype_spine')); ?>;" <?php endif; ?>
            class="shadow text-left justify-between antialiased aspect-[3/4] flex flex-col py-12 px-6 border-l-[1.25rem]">
            <h3 class="text-2xl lg:text-3xl font-bold"><?php echo $publication->post_title; ?></h3>

            <?php if($category): ?>
              <p class="pt-6 mt-auto font-semibold text-lg xl:text-xl">
                <?php echo $category->name; ?>

              </p>
            <?php endif; ?>

          </a>
          <a href="<?php echo e(get_permalink($publication->ID)); ?>"
            class="lowercase inline-block mt-8 mx-auto lg:ml-0 border-2 border-green px-9 py-3 text-sm font-semibold rounded-xl rounded-tr-none whitespace-nowrap">Read</a>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <a href="/publications/?all&orderby=date&order=DESC"
    class="mt-6 mx-auto lowercase bg-green text-white border-2 text-base border-green inline-block px-8 py-3 font-semibold rounded-xl rounded-tr-none whitespace-nowrap">
    View all
  </a>
</div>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/latest-publications.blade.php ENDPATH**/ ?>
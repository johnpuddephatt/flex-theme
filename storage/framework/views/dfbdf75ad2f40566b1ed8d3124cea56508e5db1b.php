<div>

  <?php if(has_post_thumbnail($post && isset($post->ID) ? $post->ID : '') &&
      isset(
          wp_get_attachment_metadata(get_post_thumbnail_id($post && isset($post->ID) ? $post->ID : ''))['sizes']['16by9'])): ?>
    <div class="w-1/2">
      <?php echo get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', '16by9', [
          'class' => ' w-full rounded-br-flex',
      ]); ?>

    </div>
  <?php else: ?>
    <div class="h-24"></div>
  <?php endif; ?>

  <div class="container max-w-5xl mb-12">

    <div class="">
      <div class="inline-flex mt-1 mb-4 md:mb-6">
        <a class="" href="/">Home</a>
        <span class="px-3">&gt;</span>
        <a class="" href="<?php echo e(get_permalink(get_option('page_for_publications'))); ?>">Publications</a>
      </div>
      <h2 class="max-w-3xl font-bold text-4xl lg:text-5xl text-navy">
        <?php echo $title; ?>

      </h2>

      <div class="mt-4 mb-6 text-xl font-semibold text-navy md:mb-4">
        <?php echo e(get_the_date('F Y')); ?>

      </div>

      <div class="flex gap-4">

        <?php if($publication_types): ?>
          <div class="mt-4 mb-6 flex flex-row gap-2">
            <?php $__currentLoopData = $publication_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(get_term_link($type->term_id, 'resourcetype')); ?>"
                class="bg-sky rounded-lg rounded-tr-none px-6 text-sm py-2 font-semibold"><?php echo $type->name; ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>

        <?php if($publication_areas_of_focus): ?>
          <div class="mt-4 mb-6 flex flex-row gap-2">
            <?php $__currentLoopData = $publication_areas_of_focus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area_of_focus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(get_permalink($area_of_focus->ID)); ?>"
                class="bg-sky rounded-lg rounded-tr-none px-6 text-sm py-2 font-semibold">
                <?php echo $area_of_focus->post_title; ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>

        <?php if($publication_what_we_dos): ?>
          <div class="mt-4 mb-6 flex flex-row gap-2">
            <?php $__currentLoopData = $publication_what_we_dos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $what_we_do): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(get_permalink($what_we_do->ID)); ?>"
                class="bg-sky rounded-lg rounded-tr-none px-6 text-sm py-2 font-semibold">
                <?php echo $what_we_do->post_title; ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>
      <?php endif; ?>

      <?php if(!empty($post->post_excerpt)): ?>
        <p class="max-w-3xl mt-8 text-lg font-semibold md:text-xl">
          <?php echo $post->post_excerpt; ?>

        </p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/publication-header.blade.php ENDPATH**/ ?>
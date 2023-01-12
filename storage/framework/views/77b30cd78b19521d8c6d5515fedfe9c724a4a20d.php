<div class="border-t border-sky relative lg:pt-16">
  <div
    class="z-10 px-0 container flex items-stretch flex-col-reverse overflow-hidden mx-auto text-white max-w-7xl md:flex-row">
    <?php if(has_post_thumbnail(isset($post->ID) ? $post->ID : '') &&
        isset(wp_get_attachment_metadata(get_post_thumbnail_id($post->ID))['sizes']['square'])): ?>
      <div class="<?php echo e($background ?? 'bg-sky'); ?> rounded-bl-flex relative flex-1 lg:max-w-lg overflow-hidden">
        <?php echo get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square', [
            'class' => 'w-full rounded-tr-flex',
        ]); ?>

      </div>
    <?php endif; ?>
    <div class="<?php echo e($background ?? 'bg-sky'); ?> lg:pt-40 px-4 py-12 lg:p-16 md:flex-1 flex flex-col items-start">

      <h2 class="<?php echo e($titletext ?? 'text-navy'); ?> font-bold text-4xl lg:text-6xl"><?php echo e($post->post_title); ?>

      </h2>

      <?php if(!empty($post->post_excerpt)): ?>
        <p class="<?php echo e($text ?? 'text-navy'); ?> max-w-lg mt-4 lg:mt-8 text-xl font-semibold">
          <?php echo $post->post_excerpt; ?></p>
      <?php endif; ?>
    </div>

  </div>
</div>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/section-header.blade.php ENDPATH**/ ?>
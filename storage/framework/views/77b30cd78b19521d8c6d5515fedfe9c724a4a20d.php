<div class="border-t border-sky relative lg:pt-16">
  <div
    class="<?php echo e($background ?? 'bg-sky'); ?> z-10 px-0 container flex flex-col-reverse rounded-bl-big overflow-hidden items-center mx-auto text-white max-w-7xl md:flex-row">
    <?php if(has_post_thumbnail(isset($post->ID) ? $post->ID : '') &&
        isset(wp_get_attachment_metadata(get_post_thumbnail_id($post->ID))['sizes']['square'])): ?>
      <div class="relative flex-1 max-w-lg">
        <?php echo get_the_post_thumbnail(isset($post->ID) ? $post->ID : '', 'square', [
            'class' => 'w-full rounded-tr-big',
        ]); ?>

      </div>
    <?php endif; ?>
    <div class="px-4 py-12 lg:p-16 mx-auto md:flex-1">

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
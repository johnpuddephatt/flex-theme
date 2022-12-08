<?php if($publication): ?>
  <a href="<?php echo e(get_permalink(isset($publication) ? $publication->ID : null)); ?>"
    class="my-8 no-underline flex pr-8 flex-row bg-orange bg-opacity-20 rounded-tl-3xl max-w-3xl overflow-hidden">
    <div class="bg-orange w-36 h-36 rounded-br-3xl"></div>
    <div class="py-7 px-10 flex-1">
      <h3 class="!my-0 !text-black mb-2 !text-xl font-semibold">
        <?php echo e(get_the_title(isset($publication) ? $publication->ID : null)); ?></h3>
      <!-- <p class="!my-0 max-w-lg text-navy"><?php echo wp_trim_words(get_the_excerpt(isset($publication) ? $publication->ID : null), 15); ?></p> -->
    </div>
    <?php echo e(get_svg('icons.arrow-right')); ?>
  </a>
<?php endif; ?>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/publication-card.blade.php ENDPATH**/ ?>
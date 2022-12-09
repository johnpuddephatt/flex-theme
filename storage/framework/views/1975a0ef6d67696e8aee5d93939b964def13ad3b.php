<?php if(!isset($publication) || $publication): ?>
  <a href="<?php echo e(get_permalink(isset($publication) ? $publication->ID : null)); ?>"
    class="my-2 lg:my-8 no-underline flex pr-8 flex-row bg-orange bg-opacity-20 rounded-tl-xl lg:rounded-tl-3xl max-w-3xl overflow-hidden">
    <div class="bg-orange w-12 lg:w-36 h-36 rounded-br-xl lg:rounded-br-3xl"></div>
    <div class="py-5 px-5 lg:px-10 flex-1 flex flex-col">
      <h3 class="!lg:text-xl !my-0 !text-black mb-1 !text-lg !leading-tight font-semibold">
        <?php echo wp_trim_words(get_the_title(isset($publication) ? $publication->ID : null), 15); ?></h3>

      <span class="!mt-auto !text-sm"><?php echo e(get_the_date(null, isset($publication) ? $publication->ID : null)); ?></span>
    </div>
    <?php echo e(get_svg('icons.arrow-right')); ?>
  </a>
<?php endif; ?>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/publication-card.blade.php ENDPATH**/ ?>
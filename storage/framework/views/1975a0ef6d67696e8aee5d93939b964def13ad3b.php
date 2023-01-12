<?php if(!isset($publication) || $publication): ?>
  <a href="<?php echo e(get_permalink(isset($publication) ? $publication->ID : null)); ?>"
    class="my-2 lg:my-8 no-underline flex flex-row items-stretch overflow-hidden">
    <div class="rounded-tl-flex bg-sky overflow-hidden">
      <div class="rounded-br-flex bg-blue w-6 lg:w-36 lg:min-h-[9rem] self-stretch"></div>
    </div>
    <div class="mr-auto max-w-2xl py-3 px-5 lg:px-10 flex-1 flex flex-col justify-center items-start bg-sky">
      <h3 class="!lg:text-xl !my-0 !text-black !mb-1 !text-lg !leading-tight font-semibold">
        <?php echo get_the_title(isset($publication) ? $publication->ID : null); ?></h3>

      <span class="!text-sm"><?php echo e(get_the_date('F Y', isset($publication) ? $publication->ID : null)); ?></span>
    </div>
    <div class="bg-sky flex flex-col justify-center pr-8">
      <?php echo e(get_svg('icons.arrow-right', 'text-blue h-8  w-8 my-auto')); ?>
    </div>
  </a>
<?php endif; ?>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/publication-card.blade.php ENDPATH**/ ?>
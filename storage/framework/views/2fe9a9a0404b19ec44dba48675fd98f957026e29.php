<a href="<?php echo e(get_permalink($page->ID)); ?>"
  <?php (post_class('')); ?>>
    <div class="py-12 xl:py-24 flex flex-row items-center gap-16 lg:gap-24 xl:max-w-5xl mx-auto  2xl:max-w-6xl">
    <div
        class="mb-auto hidden lg:block relative">
        <?php if(has_post_thumbnail(isset($page->ID) ? $page->ID : '') &&
            isset(wp_get_attachment_metadata(get_post_thumbnail_id($page->ID))['sizes']['square-xs'])): ?>
        <?php echo get_the_post_thumbnail($page->ID, 'square-xs', [
            'class' => 'w-72 rounded-tr-big rounded-bl-big max-w-none block ',
        ]); ?>

        <?php else: ?>
        <img src="https://via.placeholder.com/150" class="block w-72 rounded-tr-big rounded-bl-big max-w-none" />

        <?php endif; ?>
  </div>
  <div>
    <h3 class="mt-2 mb-4 text-2xl font-bold lg:text-4xl text-navy"><?php echo get_the_title($page->ID); ?></h3>
    <p class="md:text-lg"><?php echo wp_trim_words(get_the_excerpt($page->ID), 40); ?></p>
    <span
      class="font-semibold inline-block mt-8 lg:mt-16 py-3 px-6 rounded-xl rounded-tr-none border-2 border-green text-lg text-navy">Read
      more</span>
  </div>
  </div>
</a>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/page-card.blade.php ENDPATH**/ ?>
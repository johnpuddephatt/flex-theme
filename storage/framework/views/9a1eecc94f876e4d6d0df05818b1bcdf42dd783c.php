<form role="search" method="get" class="search-form w-full max-w-3xl flex flex-row" action="<?php echo e(home_url('/')); ?>">
  <label for="searchinput "class="sr-only">
    <?php echo e(_x('Search for:', 'label', 'sage')); ?>


  </label>

  <input id="searchinput" type="search" class="text-base flex-1 inline-block rounded-l-lg p-4 border-2 border-green"
    placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'sage'); ?>" value="<?php echo e(get_search_query()); ?>" name="s">

  <input type="submit"
    class="bg-green text-white border-2 text-base border-green inline-block px-6 py-3 font-semibold rounded-br-lg whitespace-nowrap"
    value="<?php echo e(esc_attr_x('Search', 'submit button', 'sage')); ?>">
</form>
<?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/forms/search.blade.php ENDPATH**/ ?>
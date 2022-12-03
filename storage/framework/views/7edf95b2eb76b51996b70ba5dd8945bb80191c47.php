<?php if($siblings): ?>
<div class="border-t border-sky">
    <div class=" container my-24 mx-auto xl:max-w-5xl 2xl:py-32">
        <nav class="border-l-4 border-orange pl-8 ">
        <h3 class="pb-6 font-semibold text-xl ">More pages in this section</h3>
        
        <?php $__currentLoopData = $siblings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class="flex items-center py-4 " href="<?php echo e(get_permalink($page->ID)); ?>">
            <?php echo get_the_title($page->ID); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>
    </div>
</div>
<?php endif; ?><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/partials/page-siblings.blade.php ENDPATH**/ ?>
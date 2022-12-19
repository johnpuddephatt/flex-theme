<?php $__env->startSection('content'); ?>

  <?php if(isset($_GET['all']) || isset($_GET['resourceProjectID'])): ?>
    <?php
      query_posts([
          'post_type' => 'publication',
          'numberposts' => -1,
          'posts_per_page' => -1,
          'order' => isset($_GET['order']) ? $_GET['order'] : 'ASC',
      
          'orderby' => isset($_GET['orderby']) ? $_GET['orderby'] : 'date',
          'meta_query' => isset($_GET['resourceProjectID'])
              ? [
                  [
                      'key' => 'project',
                      'value' => '"' . $_GET['resourceProjectID'] . '"',
                      'compare' => 'LIKE',
                  ],
              ]
              : null,
      ]);
      
    ?>

    <div class="container">
      <div class="flex flex-col max-w-3xl py-12 mx-auto mb-12 space-y-6 lg:space-y-12">
        <div class="inline-flex mt-12">
          <a class="" href="/">Home</a>
          <span class="px-3">&gt;</span>
          <a class="" href="/publications">Publications</a>
        </div>
        <h2 class="max-w-3xl font-bold text-4xl lg:text-5xl xl:text-6xl text-blue">
          <?php if(isset($_GET['resourceProjectID'])): ?>
            <?php echo e(get_post($_GET['resourceProjectID'])->post_title); ?> publications
          <?php else: ?>
            All publications
          <?php endif; ?>
        </h2>

        <?php if(!isset($_GET['resourceProjectID'])): ?>
          <div>
            <a href="?all&orderby=date&order=DESC"
              class="<?php if('?' . $_SERVER['QUERY_STRING'] == '?all&orderby=date&order=DESC'): ?> bg-blue text-white <?php else: ?> bg-sky <?php endif; ?> px-4 py-2 text-xl leading-loose rounded-xl rounded-tr-none">Newest
              first</a>
            <a href="?all&orderby=title&order=ASC"
              class="<?php if('?' . $_SERVER['QUERY_STRING'] == '?all&orderby=title&order=ASC'): ?> bg-blue text-white <?php else: ?> bg-sky <?php endif; ?> px-4 py-2 text-xl leading-loose rounded-xl rounded-tr-none">Alphabetical</a>

          </div>
        <?php endif; ?>

        <?php global $wp_query ?>
        <div class="max-w-3xl text-right">Found <?php echo e($wp_query->found_posts); ?> publications</div>

        <?php while(have_posts()): ?>
          <?php (the_post()); ?>
          <?php echo $__env->make('partials.publication-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  <?php else: ?>
    <?php echo $__env->make('partials.section-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="space-y-24 mb-48">

      <div class="container max-w-3xl mx-auto prose prose-xl">
        <?php echo $post->post_content; ?>

      </div>

      <div class="bg-green bg-opacity-20 py-24">
        <form class="container max-w-3xl mx-auto" role="search" action="<?php echo e(home_url('/')); ?>" method="get"
          id="searchform">
          <h2 class="text-center mb-16 text-3xl font-bold lg:text-4xl text-blue">Find a publication</h2>
          <div class="flex flex-wrap px-8 gap-2 lg:gap-y-4 lg:gap-x-6">
            <input aria-label="Text to search for" type="text" name="s" placeholder="Search publications"
              class="focus:shadow-outline w-full px-6 py-5 text-xl leading-tight border border-opacity-50 border-green rounded-lg appearance-none focus:outline-none" />
            <input type="hidden" name="post_type" value="publication" />
            <select
              class="focus:shadow-outline w-full md:w-2/5 flex-grow px-6 py-4 text-xl border border-opacity-50 border-green rounded-lg focus:outline-none"
              name="post_resourcetype">
              <option value="">All publication types</option>
              <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($type->term_id); ?>"><?php echo $type->name; ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <select
              class="focus:shadow-outline w-full md:w-2/5 flex-grow px-6 py-4 text-xl border border-opacity-50 border-green rounded-lg focus:outline-none"
              name="post_areaoffocus">
              <option value="">All areas of focus</option>
              <?php $__currentLoopData = $areas_of_focus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $area_of_focus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($area_of_focus->ID); ?>"><?php echo $area_of_focus->post_title; ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <input
              class="mt-6 mx-auto bg-green inline-flex w-auto px-12 py-4 text-base text-center lowercase rounded-2xl rounded-tr-none appearance-none text-white focus:outline-none"
              type="submit" alt="Search" value="Search" />
          </div>
        </form>
      </div>

      <?php echo $__env->make('partials.latest-publications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('partials.areas-of-focus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/archive-publication.blade.php ENDPATH**/ ?>
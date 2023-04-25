 <?php $__env->startSection('content'); ?>
  <div class="flex flex-col w-screen py-16 space-y-12 overflow-x-hidden lg:space-y-16 xl:space-y-24 2xl:space-y-36">
    <div class="relative">
      <div
        class="2xl:max-w-8xl container md:border-l border-blue z-10 flex flex-col-reverse items-center px-0 mx-auto max-w-7xl min-h-header-sm lg:min-h-header md:flex-row">
        <div class="max-w-4xl pb-12 md:flex-1 md:pb-0 container md:border-l-4 border-white md:ml-[-2px]">
          <h2 class="text-blue pr-6 text-5xl 2xl:text-6xl font-bold leading-none">
            <?php echo e(carbon_get_theme_option('home_hero_title')); ?>

          </h2>
          <p class="mt-8 font-semibold text-lg"><?php echo e(carbon_get_theme_option('home_hero_subtitle')); ?></p>

          <?php if(carbon_get_theme_option('home_hero_url')): ?>
            <a class="border-2 rounded-tr-none rounded-xl border-green py-3 px-6 font-semibold lowercase inline-block mt-12"
              href="<?php echo e(carbon_get_theme_option('home_hero_url')); ?>">Find out how</a>
          <?php endif; ?>
        </div>

        <div class="relative flex-none w-2/3 mb-6 ml-auto pr-4 md:w-1/2 lg:my-0 md:pl-20">
          <div class="w-full relative pt-[100%]">
            <div class="grid grid-cols-4 grid-rows-4 absolute inset-0">
              <div class="rounded-bl-flex rounded-tr-flex bg-navy overflow-hidden"></div>
              <div class="rounded-bl-flex rounded-tr-flex bg-green overflow-hidden"></div>
              <div class="rounded-br-flex rounded-tl-flex bg-orange overflow-hidden"></div>
              <div class="rounded-bl-flex rounded-tr-flex bg-sky overflow-hidden">
                <?php echo $hero_images[0] ?? null; ?>

              </div>

              <div class="rounded-bl-flex rounded-tr-3xl overflow-hidden"></div>
              <div class="rounded-tr-flex rounded-bl-flex bg-orange overflow-hidden"></div>
              <div class="rounded-tl-flex rounded-br-flex bg-navy overflow-hidden"><?php echo $hero_images[1] ?? null; ?></div>
              <div class="rounded-tl-flex rounded-br-flex bg-sky overflow-hidden"></div>

              <div class="rounded-tr-flex rounded-bl-flex bg-sky overflow-hidden"></div>
              <div class="rounded-tl-flex rounded-br-flex bg-navy overflow-hidden"></div>
              <div class="rounded-tl-flex rounded-br-flex bg-green overflow-hidden"><?php echo $hero_images[2] ?? null; ?></div>
              <div class="rounded-tr-flex rounded-bl-flex overflow-hidden"></div>

              <div class="rounded-tr-flex rounded-bl-flex overflow-hidden"></div>
              <div class="rounded-tl-flex rounded-br-flex bg-green overflow-hidden"></div>
              <div class="rounded-tr-flex rounded-bl-flex bg-sky overflow-hidden"></div>
              <div class="rounded-tr-flex rounded-bl-flex bg-orange overflow-hidden"></div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php if(carbon_get_theme_option('home_message_enabled')): ?>
      <div class="container">
        <div class="overflow-hidden flex flex-col leading-tight md:flex-row">
          <?php if(carbon_get_theme_option('home_message_image')): ?>
            <div class="rounded-bl-flex overflow-hidden items-stretch hidden md:block w-72 h-72 bg-blue">
              <?php echo wp_get_attachment_image(carbon_get_theme_option('home_message_image'), 'thumbnail', '', [
                  'class' => 'w-full h-auto',
              ]); ?>

            </div>
          <?php endif; ?>
          <div class="px-12 py-8 bg-sky flex flex-1 flex-col justify-center items-start">
            <div>
              <h3 class="text-3xl font-bold text-navy">
                <?php echo carbon_get_theme_option('home_message_title'); ?>

              </h3>
              <p class="font-semibold text-xl text-navy mt-2 mb-8"><?php echo carbon_get_theme_option('home_message_body'); ?></p>
            </div>
            <a href="<?php echo e(carbon_get_theme_option('home_message_link_url')); ?>"
              class="lowercase border-2 border-green px-6 py-3 text-sm font-semibold rounded-xl rounded-tr-none whitespace-nowrap">
              <?php echo e(carbon_get_theme_option('home_message_link_text') ? carbon_get_theme_option('home_message_link_text') : 'read more'); ?>

            </a>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if(count($home_posts)): ?>
      <div>
        <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-16">Latest updates</h2>
        <div class="container grid lg:grid-cols-2">
          <div class="pr-16 relative">
            <div class="rounded-tl-flex align-top inline-block bg-orange w-2/3 pt-[66.67%]"></div>
            <div
              class="rounded-tr-flex rounded-bl-flex overflow-hidden relative inline-block bg-sky ml-[-35%] mt-[33.33%] w-2/3 pt-[66.67%]">
              <?php echo get_the_post_thumbnail($home_posts[0]->ID, null, [
                  'class' => 'h-full w-full object-cover object-center inset-0 absolute',
              ]); ?>

            </div>
          </div>
          <div class="gap-x-12 md:grid-cols-2 gap-y-16 mt-12 lg:border-l-2 lg:border-orange lg:pl-8 grid lg:gap-y-32">
            <?php $__currentLoopData = $home_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="<?php echo e($loop->iteration == 1 ? 'md:col-span-2' : null); ?> flex flex-col">
                <a href="<?php echo e(get_permalink($post->ID)); ?>">
                  <div class="<?php echo e($loop->iteration == 1 ? 'text-lg' : 'text-base'); ?> font-semibold mb-4">
                    <?php echo e(date(get_option('date_format'), strtotime($post->post_date))); ?>

                  </div>
                  <h3 class="<?php echo e($loop->iteration == 1 ? 'text-2xl' : 'text-lg'); ?> leading-tight font-semibold">
                    <?php echo e($post->post_title); ?>

                  </h3>
                  <p class="<?php echo e($loop->iteration == 1 ? '' : 'text-sm'); ?> py-8"><?php echo wp_trim_words(get_the_excerpt($post->ID), 30); ?></p>
                </a>

                <a href="<?php echo e(get_permalink($post->ID)); ?>"
                  class="lowercase inline-block mt-auto mr-auto border-2 border-green px-9 py-3 text-sm font-semibold rounded-xl rounded-tr-none whitespace-nowrap">Read</a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php echo $__env->make('partials.areas-of-focus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('partials.latest-publications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div>
      <h2 class="container text-center text-3xl lg:text-4xl font-bold text-blue mb-16">What we do</h2>

      <div class="container flex items-center justify-center flex-wrap gap-y-24">
        <?php $__currentLoopData = $home_blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="px-12 md:w-1/2 xl:w-1/3 flex flex-col space-y-8 text-center">
            <a href="<?php echo e(get_permalink($block->ID)); ?>" class="relative">
              <div class="max-w-lg mx-auto relative">
                <div
                  class="rounded-tr-flex rounded-bl-flex ml-[8.333%] mt-[8.333%] top-0 absolute -z-10 bg-sky aspect-square w-11/12 md:w-10/12">
                </div>
                <?php echo get_the_post_thumbnail($block->ID, 'square', [
                    'class' => 'block w-11/12 md:w-10/12 rounded-tr-flex rounded-bl-flex mb-[8.333%]',
                ]); ?>

              </div>
            </a>

            <h3 class="text-2xl font-semibold leading-tight">
              <a href="<?php echo e(get_permalink($block->ID)); ?>"><?php echo get_the_title($block->ID); ?></a>
            </h3>
            <!-- <div class="max-w-sm mx-auto lg:mx-0">
                                                                                                                                                                      <?php echo wp_trim_words(get_the_excerpt($block->ID), 30); ?>

                                                                                                                                                                    </div> -->
            <a href="<?php echo e(get_permalink($block->ID)); ?>"
              class="lowercase inline-block mt-auto mx-auto border-2 border-green px-9 py-3 text-sm font-semibold rounded-xl rounded-tr-none whitespace-nowrap">Read</a>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

    </div>

    <form action="<?php echo e(carbon_get_theme_option('newsletter_url')); ?>" method="POST" class="container mb-16">
      <div class="overflow-hidden text-white flex flex-row items-stretch leading-tight">

        <div class="bg-navy flex flex-col items-start justify-center p-6 md:p-12 lg:px-24 flex-1">

          <h3 class="text-3xl font-bold mb-4">
            <?php echo carbon_get_theme_option('newsletter_title'); ?>

          </h3>
          <p class="font-semibold text-xl mb-12"><?php echo carbon_get_theme_option('newsletter_subtitle'); ?></p>

          <div class="flex w-full max-w-2xl">
            <input name="EMAIL"
              class="bg-navy text-base flex-1 inline-block rounded-l-xl py-4 px-6 border-2 border-green" type="text"
              placeholder="Enter your email address">
            <div style="position: absolute; left: -5000px;"><input type="text"
                name="b_31c47f05892f67100d4173ae1_d783a08397" tabindex="-1" value=""></div>
            <button type="submit"
              class="bg-green border-2 lowercase text-base border-green inline-block px-6 py-3 font-semibold rounded-br-xl whitespace-nowrap">
              <?php echo e(carbon_get_theme_option('newsletter_button_text') ? carbon_get_theme_option('newsletter_button_text') : 'Sign up'); ?>

            </button>
          </div>
        </div>
        <?php if(carbon_get_theme_option('newsletter_image')): ?>
          <div class="-mr-px rounded-br-flex hidden lg:block lg:w-96 lg:h-96 bg-blue overflow-hidden">
            <?php echo wp_get_attachment_image(carbon_get_theme_option('newsletter_image'), 'square', '', [
                'class' => 'w-full h-auto',
            ]); ?>

          </div>
        <?php endif; ?>
      </div>
    </form>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/johnpuddephatt/Sites/flex/web/app/themes/flex-2022/resources/views/template-home.blade.php ENDPATH**/ ?>
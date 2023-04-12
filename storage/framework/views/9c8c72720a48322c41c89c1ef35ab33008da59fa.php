<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : '';
    $image_background = $block->image_background != '' ? $block->image_background : '';
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  ?>

  <div id="banner" class="m-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-12">
          <div class="banner-content">
            <h1 class="title"><?php echo e($brief); ?></h1>
            <div class="banner-content-slide-container">
              <div class="banner-content-slide">
                <?php if($block_childs): ?>
                  <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                      $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    ?>
                    <p class="banner-content-slide-text"><?php echo e($title_child); ?></p>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="banner-icon">
            <svg
              width="96"
              height="159"
              viewBox="0 0 96 159"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M48.2388 0.404335L48.2388 152.505"
                stroke="white"
                stroke-width="10"
              />
              <line
                x1="45.5881"
                y1="154.346"
                x2="91.9052"
                y2="108.029"
                stroke="white"
                stroke-width="10"
              />
              <line
                x1="51.6394"
                y1="155.148"
                x2="3.54974"
                y2="107.058"
                stroke="white"
                stroke-width="10"
                stroke-linejoin="bevel"
              />
            </svg>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="banner-desc">
            <p>
              <?php echo $content; ?>

            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>


<?php /**PATH D:\xampp\htdocs\fhmvietnam\resources\views/frontend/blocks/banner/styles/static.blade.php ENDPATH**/ ?>
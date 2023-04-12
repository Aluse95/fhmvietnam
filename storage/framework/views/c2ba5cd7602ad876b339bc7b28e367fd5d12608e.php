<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : '';
    $image_background = $block->image_background != '' ? $block->image_background : '';
    
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  ?>

  <style>
    #service {
      padding: 0;
      background-color: unset;
    }
  </style>

  <div id="service">
    <div class="container">
      <div class="service-title">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="subtitle">
              <p><?php echo e($content); ?></p>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="title">
              <h2><?php echo $title; ?></h2>
              <p>
                <?php echo e($brief); ?>

              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="service-list">
        <div class="row">
          <?php if($block_childs): ?>
            <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php
                $title_child = $item->json_params->title->{$locale} ?? $item->title;
                $title_child = $item->json_params->title->{$locale} ?? $item->title;
                $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                $content_child = $item->json_params->content->{$locale} ?? $item->content;
                $image_child = $item->image != '' ? $item->image : null;
                $image_background = $item->image_background != '' ? $item->image_background : null;
              ?>

              <div class="col-lg-6 col-md-6 col-12">
                <div class="service-item">
                  <div class="service-item-img">
                    <?php echo $brief_child; ?>

                  </div>
                  <div class="service-item-text">
                    <a href="#" class="text"><?php echo e($title_child); ?></a>
                    <a href="#" class="icon">
                      <?php echo $content_child; ?>

                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php $__env->startPush('script'); ?>
  <script>
    $(function() {
      $('#footer').addClass('dark');
    })
  </script>
<?php $__env->stopPush(); ?>

<?php /**PATH D:\xampp\htdocs\fhmvietnam\resources\views/frontend/blocks/custom_service/styles/service_content.blade.php ENDPATH**/ ?>
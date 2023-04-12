<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;

    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
    $num = floor(($block_childs->count())/2);
    $childs = $block_childs->chunk($num);
  ?>

  <div id="client">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="client-desktop">
            <div class="client-slide">
              <div class="client-slide-list">
                <?php if(isset($childs[0])): ?>
                <?php $__currentLoopData = $childs[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image != '' ? $item->image : null;
                    $image_background = $item->image_background != '' ? $item->image_background : null;
                  ?>

                  <div class="client-slide-item">
                    <img src="<?php echo e($image); ?>" alt="<?php echo e($title_child); ?>" />
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>
              <div class="client-slide-list">
                <?php if(isset($childs[1])): ?>
                <?php $__currentLoopData = $childs[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image != '' ? $item->image : null;
                    $image_background = $item->image_background != '' ? $item->image_background : null;
                  ?>

                  <div class="client-slide-item">
                    <img src="<?php echo e($image); ?>" alt="<?php echo e($title_child); ?>" />
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="client-mobile">
            <div class="client-slide">
              <div class="client-slide-list">
                <?php if(isset($childs[0])): ?>
                <?php $__currentLoopData = $childs[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image != '' ? $item->image : null;
                    $image_background = $item->image_background != '' ? $item->image_background : null;
                  ?>

                  <div class="client-slide-item">
                    <img src="<?php echo e($image); ?>" alt="<?php echo e($title_child); ?>" />
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>
              <div class="client-slide-list">
                <?php if(isset($childs[1])): ?>
                <?php $__currentLoopData = $childs[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content = $item->json_params->content->{$locale} ?? $item->content;
                    $image = $item->image != '' ? $item->image : null;
                    $image_background = $item->image_background != '' ? $item->image_background : null;
                  ?>

                  <div class="client-slide-item">
                    <img src="<?php echo e($image); ?>" alt="<?php echo e($title_child); ?>" />
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="client-text">
            <h2>
              <?php echo $title; ?>

            </h2>
            <p><?php echo e($brief); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php /**PATH D:\xampp\htdocs\fhmvietnam\resources\views/frontend/blocks/custom/styles/about_client.blade.php ENDPATH**/ ?>
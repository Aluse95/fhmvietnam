<?php if($block): ?>
  <?php
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
    $num = floor(($block_childs->count())/2);
    $childs = $block_childs->chunk($num);
  ?>

  <div id="project">
    <div class="project-slide">
      <div class="project-slide-item">
        <?php if(isset($childs[0])): ?>
        <?php $__currentLoopData = $childs[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $content = $item->json_params->content->{$locale} ?? $item->content;
            $image = $item->image != '' ? $item->image : null;
            $image_background = $item->image_background != '' ? $item->image_background : null;
          ?>

          <div class="project-slide-img">
            
            <img src="<?php echo e($image); ?>" alt="">
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
      <div class="project-slide-item">
        <?php if(isset($childs[1])): ?>
        <?php $__currentLoopData = $childs[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $content = $item->json_params->content->{$locale} ?? $item->content;
            $image = $item->image != '' ? $item->image : null;
            $image_background = $item->image_background != '' ? $item->image_background : null;
          ?>

          <div class="project-slide-img">
            
            <img src="<?php echo e($image); ?>" alt="">
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\fhmvietnam\resources\views/frontend/blocks/banner/styles/slide.blade.php ENDPATH**/ ?>
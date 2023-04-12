<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
    $first = $block_childs->first();
  ?>

  <div id="service">
    <div class="container">
      <div class="service-text">
        <h2>
          <?php echo $title; ?>

        </h2>
        <a href="<?php echo e($url_link); ?>">
          <div class="button button-dark">
            <div class="icon">
              <svg
                width="159"
                height="97"
                viewBox="0 0 159 97"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M0.524414 48.1672L152.625 48.1672"
                  stroke="black"
                  stroke-width="10"
                />
                <line
                  x1="154.466"
                  y1="50.8179"
                  x2="108.149"
                  y2="4.50072"
                  stroke="black"
                  stroke-width="10"
                />
                <line
                  x1="155.268"
                  y1="44.7666"
                  x2="107.178"
                  y2="92.8562"
                  stroke="black"
                  stroke-width="10"
                  stroke-linejoin="bevel"
                />
              </svg>
            </div>
            <a href="<?php echo e($url_link); ?>" class="text"><?php echo e($url_link_title); ?></a>
          </div>
        </a>
      </div>

      <div class="service-desktop">
        <div class="service-wrapper">
          <div class="button-control">
            <div class="prev" onclick="handleControl('prev')">
              <div class="button button-light">
                <div class="icon">
                  <svg
                    width="160"
                    height="97"
                    viewBox="0 0 160 97"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M159.002 49.1187L6.901 49.1187"
                      stroke="white"
                      stroke-width="10"
                    />
                    <line
                      x1="5.05995"
                      y1="46.468"
                      x2="51.3771"
                      y2="92.7851"
                      stroke="white"
                      stroke-width="10"
                    />
                    <line
                      x1="4.25841"
                      y1="52.5193"
                      x2="52.348"
                      y2="4.42965"
                      stroke="white"
                      stroke-width="10"
                      stroke-linejoin="bevel"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="next" onclick="handleControl('next')">
              <div class="button button-light">
                <div class="icon">
                  <svg
                    width="159"
                    height="97"
                    viewBox="0 0 159 97"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0.524414 48.1672L152.625 48.1672"
                      stroke="white"
                      stroke-width="10"
                    />
                    <line
                      x1="154.466"
                      y1="50.8179"
                      x2="108.149"
                      y2="4.50072"
                      stroke="white"
                      stroke-width="10"
                    />
                    <line
                      x1="155.268"
                      y1="44.7666"
                      x2="107.178"
                      y2="92.8562"
                      stroke="white"
                      stroke-width="10"
                      stroke-linejoin="bevel"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="pagination"></div>
          <div class="service-slide">
            <div class="service-img-list">
              <?php if($block_childs): ?>
                <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content_child = $item->json_params->content->{$locale} ?? $item->content;
                    $image_child = $item->image != '' ? $item->image : null;
                    $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
                    $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
                    $icon = $item->icon != '' ? $item->icon : '';
                    $active = $item->id == $first->id ? 'active' : '';
                  ?>

                  <div class="service-img-item <?php echo e($active); ?>">
                    <?php echo $content; ?>

                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </div>
            <div class="service-list">
              <?php if($block_childs): ?>
                <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content_child = $item->json_params->content->{$locale} ?? $item->content;
                    $image_child = $item->image != '' ? $item->image : null;
                    $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
                    $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
                    $icon = $item->icon != '' ? $item->icon : '';
                    $active = $item->id == $first->id ? 'active' : '';
                  ?>

                  <div class="service-item <?php echo e($active); ?>">
                    <div class="service-item-badge">
                      <?php echo $icon; ?>

                    </div>
                    <div class="service-item-text">
                      <h3><?php echo e($title_child); ?></h3>
                      <p>
                        <?php echo $brief_child; ?>

                      </p>
                    </div>
                    <a href="<?php echo e($url_link); ?>">
                      <div class="button button-light button-sm">
                        <div class="icon">
                          <svg
                            width="159"
                            height="97"
                            viewBox="0 0 159 97"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M0.524414 48.1672L152.625 48.1672"
                              stroke="white"
                              stroke-width="10"
                            />
                            <line
                              x1="154.466"
                              y1="50.8179"
                              x2="108.149"
                              y2="4.50072"
                              stroke="white"
                              stroke-width="10"
                            />
                            <line
                              x1="155.268"
                              y1="44.7666"
                              x2="107.178"
                              y2="92.8562"
                              stroke="white"
                              stroke-width="10"
                              stroke-linejoin="bevel"
                            />
                          </svg>
                        </div>
                        <a href="<?php echo e($url_link); ?>" class="text"><?php echo e($url_link_title); ?></a>
                      </div>
                    </a>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="service-mobile">
        <div class="service-wrapper">
          <div class="service-list">
            <?php if($block_childs): ?>
                <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $title_child = $item->json_params->title->{$locale} ?? $item->title;
                    $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
                    $content_child = $item->json_params->content->{$locale} ?? $item->content;
                    $image_child = $item->image != '' ? $item->image : null;
                    $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
                    $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
                    $icon = $item->icon != '' ? $item->icon : '';
                    $active = $item->id == $first->id ? 'active' : '';
                  ?>

                  <div class="service-item">
                    <div class="service-item-text">
                      <h3>
                        <?php echo e($title_child); ?>

                        <div class="toggle-service">
                          <div class="line"></div>
                          <div class="line"></div>
                        </div>
                      </h3>
                      <div class="service-item-badge">
                        <?php echo $icon; ?>

                      </div>
                      <p>
                        <?php echo $brief_child; ?>

                      </p>
                    </div>
                    <a href="<?php echo e($url_link); ?>">
                      <div class="button button-light button-sm">
                        <div class="icon">
                          <svg
                            width="159"
                            height="97"
                            viewBox="0 0 159 97"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M0.524414 48.1672L152.625 48.1672"
                              stroke="white"
                              stroke-width="10"
                            />
                            <line
                              x1="154.466"
                              y1="50.8179"
                              x2="108.149"
                              y2="4.50072"
                              stroke="white"
                              stroke-width="10"
                            />
                            <line
                              x1="155.268"
                              y1="44.7666"
                              x2="107.178"
                              y2="92.8562"
                              stroke="white"
                              stroke-width="10"
                              stroke-linejoin="bevel"
                            />
                          </svg>
                        </div>
                        <a href="<?php echo e($url_link); ?>" class="text"><?php echo e($url_link_title); ?></a>
                      </div>
                    </a>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\fhmvietnam\resources\views/frontend/blocks/cms_service/styles/default.blade.php ENDPATH**/ ?>
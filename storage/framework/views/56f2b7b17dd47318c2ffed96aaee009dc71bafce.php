

<?php $__env->startPush('style'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhmvietnam/css/contact.css')); ?>" type="text/css" /> 
<?php $__env->stopPush(); ?>
<?php
  $page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
  $image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
  $title = $page->description ?? '';
  $image = $page->json_params->og_image ?? '';
?>

<?php $__env->startSection('content'); ?>
  
  <div id="contact">
    <div class="contact-form">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="contact-form-img">
              <img src="<?php echo e($image); ?>" alt="Contact" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="contact-form-wrapper">
              <h2 class="title">
                <?php echo e($title); ?>

              </h2>
              <form class="mb-0 form_ajax" method="post" action="<?php echo e(route('frontend.contact.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="contact-form-fields">
                  <input type="text" id="name" name="name" value="" class="sm-form-control required" placeholder="Họ và tên (bắt buộc)" required />
                  <input type="email" id="email" name="email" value=""
                    class="required email sm-form-control" placeholder="Email (bắt buộc)" required />
                  <input type="text" id="phone" name="phone" value="" class="sm-form-control" placeholder="Điện thoại (bắt buộc)" required />
                  <textarea class="required sm-form-control" id="content" name="content" rows="5" cols="30" placeholder="Lời nhắn" required></textarea>
                  <button class="button" type="submit">
                    <a href="#"><span><?php echo app('translator')->get('Gửi'); ?></span></a>
                    <a href="#"><span><?php echo app('translator')->get('Gửi'); ?></span></a>
                  </button>
                </div>
                <input type="hidden" name="is_type" value="contact">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-information">
      <div class="container">
        <a href="tel:<?php echo $web_information->information->phone ?? ''; ?>" class="phone"><?php echo $web_information->information->phone ?? ''; ?></a>
        <div class="row justify-content-end">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="contact-information-list">
              <a href="mailto:<?php echo $web_information->information->email ?? ''; ?>"
                ><span>Email.</span><?php echo $web_information->information->email ?? ''; ?>

              </a>
              <p>
                <span>Address.</span><?php echo $web_information->information->address ?? ''; ?>

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
  <script>
    $(function() {
      $('#footer').addClass('dark');
    })
  </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\fhmvietnam\resources\views/frontend/pages/contact/index.blade.php ENDPATH**/ ?>
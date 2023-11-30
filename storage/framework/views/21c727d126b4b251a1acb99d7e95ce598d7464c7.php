<?php $__env->startComponent('mail::message'); ?>
# HELLO <?php echo e($data['email']); ?>


Please click the button below to verify your email address.

<?php $__env->startComponent('mail::button', ['url' =>  $data['url'] ]); ?>
Verify Email Address
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /Users/trevorliamveloria/Downloads/Pro-price-main/resources/views/emails/verification.blade.php ENDPATH**/ ?>
<div class="px-4 py-2">

    
    <?php if(Session::has('success')): ?>
    <div class="bg-body border shadow flex items-center gap-x-3 py-4 px-4 text-paragraph">
        <img src="<?php echo e(asset('icons/check_circle_black_24dp.svg')); ?>" class="
        p-1 bg-green-200 rounded-full" alt="">
       <h3><?php echo e(Session::get('success')); ?></h3>
    </div>
    <?php endif; ?>
    
    <?php if(Session::has('error')): ?>
    <div class="bg-body border shadow flex items-center gap-x-3 py-4 px-4 text-paragraph">
        <img src="<?php echo e(asset('icons/error_black_24dp.svg')); ?>" class="
        p-1 bg-red-200 rounded-full" alt="">
        <h3><?php echo e(Session::get('error')); ?></h3>
    </div>
    <?php endif; ?>
    
    <?php if(Session::has('warning')): ?>
    <div class="bg-body border shadow flex items-center gap-x-3 py-4 px-4 text-paragraph">
        <img src="<?php echo e(asset('icons/warning_black_24dp.svg')); ?>" class="
        p-1 bg-yellow-200 rounded-full" alt="">
        <h3><?php echo e(Session::get('warning')); ?></h3>
    </div>
    <?php endif; ?>

</div>
<?php /**PATH /Users/trevorliamveloria/Downloads/Pro-price-main/resources/views/components/alert.blade.php ENDPATH**/ ?>
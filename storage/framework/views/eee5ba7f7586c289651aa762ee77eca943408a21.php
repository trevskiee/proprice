<?php $__env->startSection('title', 'About Us'); ?>



<?php $__env->startSection('content'); ?>
    
    <?php if (isset($component)) { $__componentOriginal93e240939e9981bcc9c3b317dfd7d4e57d017f07 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Buyer\Header::class, []); ?>
<?php $component->withName('buyer.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93e240939e9981bcc9c3b317dfd7d4e57d017f07)): ?>
<?php $component = $__componentOriginal93e240939e9981bcc9c3b317dfd7d4e57d017f07; ?>
<?php unset($__componentOriginal93e240939e9981bcc9c3b317dfd7d4e57d017f07); ?>
<?php endif; ?>


    <section class="container  mx-auto py-10 font-serif  px-3 md:px-0">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20">
            <img src="<?php echo e(asset('assets/pngwing.com(1).png')); ?>" class="hidden md:block" alt="">

            
            <form action="<?php echo e(route('contact_store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <?php if(Session::has('success_contact')): ?>
                <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, []); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>

                <?php endif; ?>
                <h2 class="my-8 text-3xl  font-bold text-text md:text-4xl text-center md:text-left">Contact Us</h2>
                <div class="relative mt-10">
                    <input type="text" name="name"
                        class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2" placeholder=" "
                        value="<?php echo e(old('name')); ?>" required>
                    <label for=""
                        class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Name</label>
                </div>
                <div class="relative mt-10">
                    <input type="email" name="email"
                        class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2" placeholder=" "
                        value="<?php echo e(old('email')); ?>" required>
                    <label for=""
                        class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Email</label>
                </div>
                <div class="relative mt-10">
                    <textarea type="text" name="message" class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                        placeholder=" " value="<?php echo e(old('message')); ?>" required></textarea>
                    <label for=""
                        class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Message</label>
                </div>
                <div class="relative mt-10">
                    <button class="bg-button hover:bg-yellow-500 py-2 w-full flex items-center justify-center gap-x-2">
                        <img src="<?php echo e(asset('icons/send.svg')); ?>" class="w-[1rem]" alt="">
                        Send
                    </button>

                </div>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/trevorliamveloria/Downloads/Pro-price-main/resources/views/pages/contact.blade.php ENDPATH**/ ?>
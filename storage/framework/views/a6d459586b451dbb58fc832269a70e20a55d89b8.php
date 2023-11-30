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

    <section class="container mx-auto py-10">
        <div class="sm:flex flex-row-reverse items-start max-w-screen-xl">
            
            <div class="sm:w-1/2 ">
                <div class="image object-center text-center">
                    <img src="<?php echo e(asset('assets/pngwing.com(2).png')); ?>">
                </div>

            </div>
            
            <div class="sm:w-1/2 p-5">
                <div class="text">
                    <span class="text-gray-500 border-b-2 border-indigo-600 uppercase">About Pro-Price</span>
                    <h2 class="my-4 font-bold text-3xl  sm:text-4xl "> <span class="text-indigo-600"> Your Ideal Real Estate Companion</span>
                    </h2>
                    <p class="text-gray-700">
                        At Pro-Price, we aim to transform your approach to real estate decision-making. Our goal is straightforward: to equip property buyers, sellers, and agents with unparalleled knowledge about house and lot prices, utilizing cutting-edge technology and predictive analytics.
                    </p>
                    <h2 class="my-4 font-bold text-3xl  sm:text-4xl "> <span class="text-indigo-600">What Motivates Us</span>
                    </h2>
                    <p class="text-gray-700">
                        In the constantly evolving real estate landscape, informed decision-making is crucial. We believe that understanding property pricing intricacies shouldn't be uncertain. Transparency, accuracy, and ease of access are our guiding principles in forecasting property prices.
                    </p>
                    <h2 class="my-4 font-bold text-3xl  sm:text-4xl "> <span class="text-indigo-600">Our Pledge</span>
                    </h2>
                    <p class="text-gray-700">
                        We are devoted to delivering dependable, data-backed forecasts that leverage historical trends, market analysis, and advanced algorithms. Our platform is user-friendly, ensuring that both seasoned investors and first-time buyers have easy access to the necessary tools and information.                    </p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>
    <script src="https://npmcdn.com/leaflet-geometryutil"></script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/trevorliamveloria/Downloads/Pro-price-main/resources/views/pages/about.blade.php ENDPATH**/ ?>
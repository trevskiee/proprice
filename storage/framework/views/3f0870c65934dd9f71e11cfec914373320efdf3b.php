<?php $__env->startSection('title', 'Properties'); ?>

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
    
    <section class="container mx-auto py-10 px-3 md:px-0">
        
        <div class="relative">
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
            <button id="filterButton" onclick="showFIlter()"
                class="border w-full md:w-[20rem] flex items-center justify-between gap-x-4 space-x-5 px-5 py-2 bg-body rounded text-gray-400">
                Search
                <img src="<?php echo e(asset('icons/search.svg')); ?>" class="w-[1rem]" alt="">
            </button>

            
            <form id="filterForm" class="absolute z-40 bg-body shadow border w-full md:w-[30rem] p-2 hidden">
                <div class="grid md:grid-cols-2">
                    <div class="mt-2">
                        <h3 class="text-text">Type</h3>

                        <div class="flex gap-x-2">
                            <input type="radio" name="type" value="Bungalow"
                                <?php echo e(app('request')->input('type') == 'Bungalow' ? 'checked' : ''); ?>>Bungalow
                        </div>
                        <div class="flex gap-x-2">
                            <input type="radio" name="type" value="Townhouse"
                                <?php echo e(app('request')->input('type') == 'Townhouse' ? 'checked' : ''); ?>>Townhouse
                        </div>
                        <div class="flex gap-x-2">
                            <input type="radio" name="type" value="Duplex"
                                <?php echo e(app('request')->input('type') == 'Duplex'  ? 'checked' : ''); ?>>Duplex
                        </div>
                        <div class="flex gap-x-2">
                            <input type="radio" name="type" value="Single Attached"
                                <?php echo e(app('request')->input('type') == 'Single Attached' ? 'checked' : ''); ?>>Single Attached
                        </div>
                    </div>
                    <div class="mt-2">
                        <h3 class="text-text">Location</h3>

                        <div class="flex gap-x-2">
                            <input type="radio" name="location" value="Antipolo"
                                <?php echo e(app('request')->input('location') == 'Antipolo' ? 'checked' : ''); ?>>Antipolo
                        </div>
                        <div class="flex gap-x-2">
                            <input type="radio" name="location" value="San mateo"
                                <?php echo e(app('request')->input('location') == 'San mateo' ? 'checked' : ''); ?>>San mateo
                        </div>
                        <div class="flex gap-x-2">
                            <input type="radio" name="location" value="Binangonan"
                                <?php echo e(app('request')->input('location') == 'Binangonan' ? 'checked' : ''); ?>>Binangonan
                        </div>
                    </div>
                </div>

                <div class="relative my-6">
                    <label for="labels-range-input" class="">Labels range(<span id="currentPrice">₱<?php echo e(app('request')->input('price') ? number_format(app('request')->input('price')) : '50000'); ?></span>  )</label>
                    <input id="labels-range-input" name="price" onchange="searchPrice(this)" type="range" value="<?php echo e(app('request')->input('price') ? app('request')->input('price') : '50000'); ?>" min="50000" max="100000000"
                        class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">Min (₱ 50k)</span>

                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">Max (₱ 100M)</span>
                </div>



                <div class="mt-4 grid space-y-1">
                    <button type="submit" class="bg-button px-5 py-2 w-full text-text">Submit</button>
                    <a href="/properties" type="button" class="bg-gray-300 px-5 py-2 w-full text-center text-text">Clear</a>
                </div>
            </form>
        </div>
        
        <div class="grid  md:grid-cols-2 lg:grid-cols-3 gap-10 py-10" id="projectContainer">

            
            <?php $__empty_1 = true; $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-body border  h-fit rounded opacity-0">
                    <div class="p-3">
                        <img src="<?php echo e(asset($property->photo?->photo)); ?>" loading="lazy" class="h-64 w-full object-cover"
                            alt="">
                    </div>
                    <h1 class="px-3 text-text tracking-wider font-semibold uppercase "><?php echo e($property->title); ?></h1>
                    <p class="px-3 flex gap-x-2 text-paragraph pt-2">
                        <img src="<?php echo e(asset('icons/local_offer_black_24dp.svg')); ?>" class="w-[1rem]" alt="">
                        ₱<?php echo e(number_format($property->price)); ?>

                    </p>
                    <p class="px-3 flex gap-x-2 text-paragraph">
                        <img src="<?php echo e(asset('icons/location_pin_black_24dp.svg')); ?>" class="w-[1rem]" alt="">
                        <?php echo e($property->address); ?>

                    </p>
                    <div class="flex items-center justify-end px-3 pb-3">

                        <a href="<?php echo e(route('view_property', ['id' => $property->id])); ?>"
                            class="bg-transparent border rounded px-4 py-2 text-text hover:bg-button transition-all ease-in-out">
                            view
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h1>No Property found....</h1>
            <?php endif; ?>



        </div>
        <div class="py-2">
            <?php echo e($properties->links()); ?>

        </div>
    </section>

    
    <?php if (isset($component)) { $__componentOriginalc6c2e805b94071ffc28a70b2527084263a75fb93 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Buyer\Footer::class, []); ?>
<?php $component->withName('buyer.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6c2e805b94071ffc28a70b2527084263a75fb93)): ?>
<?php $component = $__componentOriginalc6c2e805b94071ffc28a70b2527084263a75fb93; ?>
<?php unset($__componentOriginalc6c2e805b94071ffc28a70b2527084263a75fb93); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>
    <script>
        const filterForm = document.querySelector('#filterForm');

        function showFIlter() {
            filterForm.classList.toggle('hidden');
        }
        function searchPrice(e)
        {

            const price = parseFloat(e.value)
            document.querySelector('#currentPrice').innerHTML = '₱'+price.toLocaleString('en-US')

        }
        const projectContainer = document.querySelector('#projectContainer');

const observerProject = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            console.log(entry.target)
            // ,' fade-in',' zoom-in ','duration-1000'
            entry.target.classList.remove('opacity-0')
            entry.target.classList.add('animate-in')
            entry.target.classList.add('fade-in')
            entry.target.classList.add('zoom-in')
            entry.target.classList.add('delay-500')
            entry.target.classList.add('duration-1000')

        }
    });
})
for (const child of projectContainer.children) {
    observerProject.observe(child);
}
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/trevorliamveloria/Downloads/Pro-price-main/resources/views/pages/properties.blade.php ENDPATH**/ ?>
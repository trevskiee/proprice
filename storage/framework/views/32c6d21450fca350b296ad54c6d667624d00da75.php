<div class="border-b relative bg-body z-50">
    <header class="flex justify-between items-center container mx-auto h-20  z-50  px-2  md:px-0">
        
        <a href="/" class="text-text text-2xl font-semibold tracking-wider">Pro price</a>

        
        <nav class="flex items-center space-x-3 md:space-x-12  z-50">

            <div id="navbar"
                class="p-4 md:px-0 space-y-3 md:space-y-0 md:space-x-5 absolute left-0 top-20 z-0 h-fit hidden w-full bg-body shadow-md md:shadow-none md:flex md:relative md:left-0 md:top-0 md:bg-transparent">
                <a href="/"
                    class=" text-text text-sm uppercase tracking-wider <?php echo e(request()->is('/') ? 'font-bold ' : ''); ?>">Homepage</a>
                <a href="/properties"
                    class="text-text text-sm uppercase tracking-wider <?php echo e(request()->is('properties') ? 'font-bold ' : ''); ?>">Properties</a>
                <a href="/about"
                    class="text-text text-sm uppercase tracking-wider <?php echo e(request()->is('about') ? 'font-bold ' : ''); ?>">About</a>
                <a href="/contact"
                    class="text-text text-sm uppercase tracking-wider <?php echo e(request()->is('contact') ? 'font-bold ' : ''); ?>">Contact</a>
            </div>
            
            <div class="relative">
                
                <?php if(Auth::guard('seller')->check()): ?>
                    <button onclick="dropdownProfile()"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 "
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <?php if(!!Auth::guard('seller')->user()->profile): ?>
                            <img class="min-w-[2rem] max-w-[2rem]  h-8 rounded-full"
                                src="<?php echo e(asset(Auth::guard('seller')->user()->profile)); ?>" alt="user photo">
                        <?php else: ?>
                            <img class="min-w-[2rem] max-w-[2rem] h-8 rounded-full"
                                src="https://ui-avatars.com/api/?background=random&name=<?php echo e(Auth::guard('seller')->user()->name); ?>"
                                alt="user photo">
                        <?php endif; ?>
                    </button>
                    
                <?php elseif(Auth::guard('buyer')->check()): ?>
                    <button onclick="dropdownProfile()"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 "
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <?php if(!!Auth::guard('buyer')->user()->profile): ?>
                            <img class="min-w-[2rem] max-w-[2rem] h-8 rounded-full"
                                src="<?php echo e(asset(Auth::guard('buyer')->user()->profile)); ?>" alt="user photo">
                        <?php else: ?>
                            <img class="min-w-[2rem] max-w-[2rem] h-8 rounded-full"
                                src="https://ui-avatars.com/api/?background=random&name=<?php echo e(Auth::guard('buyer')->user()->name); ?>"
                                alt="user photo">
                        <?php endif; ?>
                    </button>
                    
                <?php elseif(Auth::guard('agent')->check()): ?>
                    <button onclick="dropdownProfile()"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 "
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <?php if(!!Auth::guard('agent')->user()->profile): ?>
                            <img class="min-w-[2rem] max-w-[2rem] h-8 rounded-full"
                                src="<?php echo e(asset(Auth::guard('agent')->user()->profile)); ?>" alt="user photo">
                        <?php else: ?>
                            <img class="min-w-[2rem] max-w-[2rem] h-8 rounded-full"
                                src="https://ui-avatars.com/api/?background=random&name=<?php echo e(Auth::guard('agent')->user()->name); ?>"
                                alt="user photo">
                        <?php endif; ?>
                    </button>
                <?php else: ?>
                    <button onclick="modalLoginToggle()"
                        class="bg-button  hover:bg-yellow-500 px-5 py-2 text-opacity-80 text-paragraph text-sm font-semibold uppercase tracking-wider hover:text-opacity-100">Login</button>
                <?php endif; ?>



                <!-- Dropdown menu -->
                <div id="profileDropdown"
                    class="z-10 absolute hidden left-auto right-0 top-9 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    
                    <?php if(Auth::guard('seller')->check()): ?>
                        <div class="px-4 py-3 text-sm text-gray-900 ">
                            <div><?php echo e(Auth::guard('seller')->user()->email); ?></div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownUserAvatarButton">
                            <li>
                                <a href="<?php echo e(route('seller_account')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Account</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('seller_manage_properties')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Manage Properties</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('seller_feedback')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Feedback</a>
                            </li>
                        </ul>
                        
                    <?php elseif(Auth::guard('buyer')->check()): ?>
                        <div class="px-4 py-3 text-sm text-gray-900 ">
                            <div><?php echo e(Auth::guard('buyer')->user()->email); ?></div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownUserAvatarButton">
                            <li>
                                <a href="<?php echo e(route('buyer_account')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Account</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('buyer_bookmarks')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Bookmarks</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('buyer_appointment')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Appointment</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('buyer_feedback')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Feedback</a>
                            </li>

                        </ul>
                        
                    <?php elseif(Auth::guard('agent')->check()): ?>
                        <div class="px-4 py-3 text-sm text-gray-900 ">
                            <div><?php echo e(Auth::guard('agent')->user()->email); ?></div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownUserAvatarButton">
                            <li>
                                <a href="<?php echo e(route('agent_account')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Account</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('agent_assign_propery')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Assign Property</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('agent_appointment')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Appointments</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('agent_feedback')); ?>"
                                    class="block px-4 py-2 hover:bg-gray-100 ">Feedback</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                    <div class="py-2">
                        
                        <a href="<?php echo e(route('auth_user_logout')); ?>"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign
                            out</a>
                    </div>
                </div>

            </div>

            
            <button type="button" onclick="toggleNavbar()" class="md:hidden"><img src="<?php echo e(asset('icons/menu.svg')); ?>"
                    class="w-[2rem]" alt=""></button>

        </nav>
    </header>

    
    <div id="modalLogin"
        class="fixed z-50 <?php echo e(Session::has('error_login') ? 'flex' : 'hidden'); ?> overflow-hidden w-full animate-in fade-in  duration-500   bg-black/60 h-screen top-0  justify-center pt-[5rem]  px-2 md:px-0">
        <div class="bg-body h-fit w-[30rem]">
            
            <div class="flex justify-between items-center border-b  px-2 h-[4rem]">
                <h1 class="font-semibold text-text  text-2xl">SIGN IN</h1>
                <button onclick="modalLoginToggle()" class="hover:opacity-90">
                    <img src="<?php echo e(asset('icons/x.svg')); ?>" alt="">
                </button>
            </div>
            

            <div>
                
                <?php if(Session::has('error_login')): ?>
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
                
                <form action="<?php echo e(route('auth_signin')); ?>" method="POST" class="px-4 py-7">
                    <?php echo csrf_field(); ?>
                    
                    <div class="relative">
                        <input type="text" name="email"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " value="<?php echo e(old('email')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Email</label>
                    </div>
                    
                    <?php if(Session::has('error_login')): ?>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endif; ?>
                    
                    <div class="relative mt-10">
                        <input type="password" name="password"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " value="<?php echo e(old('password')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Password</label>
                        <button onclick="togglePassword(this)" type="button" class="absolute top-3 right-3"><img
                                src="<?php echo e(asset('icons/eye-off.svg')); ?>" class="w-[1rem]" alt=""></button>
                        <div class="flex justify-end pt-2">
                            <a href="<?php echo e(route('forgot_password')); ?>"
                                class="text-blue-600 hover:underline font-medium text-sm">Forgot password?</a>
                        </div>
                    </div>
                    
                    <?php if(Session::has('error_login')): ?>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endif; ?>
                    
                    <div class="relative mt-7">

                        <button type="submit" onclick="changeText(this)"
                            class="text-text  bg-button px-2 w-full py-2">
                            Login
                        </button>
                    </div>

                    
                    <div class="relative mt-7 flex justify-center">
                        <p class="text-paragraph">Dont have an account yet? <a onclick="modalTypeToggle()"
                                class="text-blue-500 font-semibold"> Sign Up</a></p>

                    </div>
                </form>
            </div>
        </div>
    </div>


    
    <div id="modalType"
        class="fixed z-50 hidden overflow-hidden w-full bg-black/60 h-screen top-0  justify-center animate-in fade-in  duration-500 pt-[5rem] px-2 md:px-0">
        <div class="bg-body h-fit w-[30rem]">
            
            <div class="flex justify-between items-center border-b  px-2 h-[4rem]">
                <h1 class="font-semibold text-text  text-2xl">SIGN UP</h1>
                <button onclick="modalTypeToggle()" class="hover:opacity-90">
                    <img src="<?php echo e(asset('icons/x.svg')); ?>" alt="">
                </button>
            </div>
            
            <div>
                <form action="" class="px-4 py-7">

                    <div class="relative  space-y-3">
                        
                        <button type="button" onclick="modalBuyerToggle()"
                            class="text-text bg-button px-2 w-full py-2 hover:bg-yellow-500">Buyer</button>
                        
                        <button type="button" onclick="modalSellerToggle()"
                            class="text-text bg-button px-2 w-full py-2 hover:bg-yellow-500"">Seller</button>
                        
                        <button type="button" onclick="modalAgentToggle()"
                            class="text-text bg-button px-2 w-full py-2 hover:bg-yellow-500"">Agent</button>
                    </div>
                    
                    <div class="relative mt-7 flex justify-center">
                        <p class="text-paragraph">Already have an account? <a onclick="modalLoginToggle()"
                                class="text-blue-500 font-semibold"> Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <div id="modalBuyer"
        class="fixed z-50 <?php echo e(Session::has('error_buyer') ? 'flex' : 'hidden'); ?>  overflow-hidden animate-in fade-in  duration-500 w-full bg-black/60 h-screen top-0  justify-center   pt-[5rem] px-2 md:px-0">
        <div class="bg-body h-fit w-[30rem]">
            
            <div class="flex justify-between items-center border-b  px-2 h-[4rem]">
                <h1 class="font-semibold text-text  text-2xl">SIGN UP / BUYER</h1>
                <button onclick="modalBuyerToggle()" class="hover:opacity-90">
                    <img src="<?php echo e(asset('icons/x.svg')); ?>" alt="">
                </button>
            </div>
            
            <div>
                
                <?php if(Session::has('error_buyer')): ?>
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
                
                <form action="<?php echo e(route('auth_buyer_signup')); ?>" method="POST" class="px-4 py-7 z-0">
                    <?php echo csrf_field(); ?>
                    
                    <div class="relative">
                        <input type="text" name="name"
                            class="border-b outline-none bg-transparent z-0 border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " required value="<?php echo e(old('name')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm  text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Name</label>
                    </div>
                    
                    <div class="relative mt-10">
                        <input type="email" name="email"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " required value="<?php echo e(old('email')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Email</label>
                    </div>
                    
                    <?php if(Session::has('error_buyer')): ?>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endif; ?>
                    
                    <div class="relative mt-10">
                        <input type="text" name="phone_number"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " required value="<?php echo e(old('phone_number')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Phone
                            Number</label>
                    </div>
                    
                    <div class="relative mt-10">
                        <input type="password" name="password"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " required value="<?php echo e(old('password')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Password</label>
                        <button onclick="togglePassword(this)" type="button" class="absolute top-3 right-3"><img
                                src="<?php echo e(asset('icons/eye-off.svg')); ?>" class="w-[1rem]" alt=""></button>
                    </div>
                    
                    <?php if(Session::has('error_buyer')): ?>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endif; ?>
                    
                    <div class="relative mt-10">
                        <input type="checkbox" required value="example">
                        <label class="text-sm">
                            I have read and agree to the <a href="/privacy-policy"
                                class="text-blue-500 underline">Privacy Policy</a> and <a href="/terms_and_conditions"
                                class="text-blue-500 underline">Terms and Conditions</a>
                        </label>
                    </div>
                    
                    <div class="relative mt-7">
                        <button class="text-text bg-button px-2 w-full py-2 font-medium">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div id="modalSeller"
        class="fixed z-50 <?php echo e(Session::has('error_seller') || Session::has('error_seller_success') ? 'flex' : 'hidden'); ?> overflow-y-auto w-full bg-black/60 h-screen top-0 left-0 justify-center animate-in fade-in  duration-500 py-[5rem] max-h-screen px-2 md:px-0">
        <div class="bg-body h-fit w-[30rem]">
            
            <div class="flex justify-between items-center border-b  px-2 h-[4rem]">
                <h1 class="font-semibold text-text  text-2xl">SIGN UP / SELLER </h1>
                <button onclick="modalSellerToggle()" class="hover:opacity-90">
                    <img src="<?php echo e(asset('icons/x.svg')); ?>" alt="">
                </button>
            </div>
            
            <div>
                
                <?php if(Session::has('error_seller_success')): ?>
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
                <?php else: ?>
                    
                    <form action="<?php echo e(route('auth_seller_signup')); ?>" autocomplete="off" method="POST"
                        class="px-4 py-7" enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        
                        <div class="relative">
                            <input type="text" name="name"
                                class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                                placeholder=" " required value="<?php echo e(old('name')); ?>">
                            <label for=""
                                class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Name</label>
                        </div>
                        
                        <div class="relative mt-10">
                            <input type="email" name="email"
                                class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                                placeholder=" " required value="<?php echo e(old('email')); ?>"">
                            <label for=""
                                class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Email</label>
                        </div>
                        
                        <?php if(Session::has('error_seller')): ?>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php endif; ?>
                        
                        <div class="relative mt-10">
                            <input type="text" name="phone_number"
                                class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                                placeholder=" " required value="<?php echo e(old('phone_number')); ?>">
                            <label for=""
                                class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Phone
                                Number</label>
                        </div>
                        
                        <?php if(Session::has('error_seller')): ?>
                            <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php endif; ?>
                        
                        <div class="relative mt-10">
                            <input type="password" name="password"
                                class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                                placeholder=" " required value="<?php echo e(old('password')); ?>">
                            <label for=""
                                class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Password</label>
                            <button onclick="togglePassword(this)" type="button" class="absolute top-3 right-3"><img
                                    src="<?php echo e(asset('icons/eye-off.svg')); ?>" class="w-[1rem]" alt=""></button>
                        </div>
                        
                        <?php if(Session::has('error_seller')): ?>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php endif; ?>
                        
                        <h1 class=" mt-10 text-center font-medium text-text">Upload License for validation</h1>
                        <div class="flex items-center justify-center w-full">

                            <label for="dropzone-file"
                                class="flex relative overflow-hidden flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to
                                            upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 ">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>

                                </div>
                                <img id="preview" src="" class="absolute" alt="...">
                                <input id="dropzone-file" onchange="uploadFile(this)" type="file" name="license"
                                    class="hidden" />
                            </label>

                        </div>
                        
                        <?php if(Session::has('error_seller')): ?>
                            <?php $__errorArgs = ['license'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php endif; ?>
                        
                        <div class="relative mt-10">
                            <input type="checkbox" required value="example">
                            <label class="text-sm">
                                I have read and agree to the <a href="/privacy-policy"
                                    class="text-blue-500 underline">Privacy Policy</a> and <a
                                    href="/terms_and_conditions" class="text-blue-500 underline">Terms and
                                    Conditions</a>
                            </label>
                        </div>
                        
                        <div class="relative mt-7">
                            <button class="text-text bg-button px-2 w-full py-2 font-medium">Create Account</button>

                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>

    
    <div id="modalAgent"
        class="fixed z-50 <?php echo e(Session::has('error_agent') ? 'flex' : 'hidden'); ?>  overflow-y-auto w-full bg-black/60 h-screen top-0 left-0 justify-center animate-in fade-in  duration-500 py-[5rem] max-h-screen px-2 md:px-0">
        <div class="bg-body h-fit w-[30rem]">
            
            <div class="flex justify-between items-center border-b  px-2 h-[4rem]">
                <h1 class="font-semibold text-text  text-2xl">SIGN UP / Agent</h1>
                <button onclick="modalAgentToggle()" class="hover:opacity-90">
                    <img src="<?php echo e(asset('icons/x.svg')); ?>" alt="">
                </button>
            </div>
            
            <div>
                
                <?php if(Session::has('error_agent')): ?>
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

                
                <form action="<?php echo e(route('auth_agent_signup')); ?>" autocomplete="off" method="POST" class="px-4 py-7"
                    enctype="multipart/form-data">

                    <?php echo csrf_field(); ?>
                    
                    <div class="relative">
                        <input type="text" name="name"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " required value="<?php echo e(old('name')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Name</label>
                    </div>
                    
                    <div class="relative mt-10">
                        <input type="email" name="email"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " required value="<?php echo e(old('email')); ?>"">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Email</label>
                    </div>
                    
                    <?php if(Session::has('error_agent')): ?>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endif; ?>
                    
                    <div class="relative mt-10">
                        <input type="text" name="phone_number"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " required value="<?php echo e(old('phone_number')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Phone
                            Number</label>
                    </div>
                    
                    <?php if(Session::has('error_agent')): ?>
                        <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endif; ?>
                    
                    <div class="relative mt-10">
                        <input type="text" name="company_name"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " required value="<?php echo e(old('company_name')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Company
                            Name</label>
                    </div>
                    
                    <?php if(Session::has('error_agent')): ?>
                        <?php $__errorArgs = ['company_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endif; ?>
                    
                    <div class="relative mt-10">
                        <input type="password" name="password"
                            class="border-b outline-none border-text w-full pt-3 peer focus:border-b-2"
                            placeholder=" " required value="<?php echo e(old('password')); ?>">
                        <label for=""
                            class="absolute -top-4 left-0 text-sm text-text peer-placeholder-shown:top-3 peer-placeholder-shown:text-text/60 peer-focus:-top-4 peer-focus:text-text transition-all ease-in-out">Password</label>
                        <button onclick="togglePassword(this)" type="button" class="absolute top-3 right-3"><img
                                src="<?php echo e(asset('icons/eye-off.svg')); ?>" class="w-[1rem]" alt=""></button>
                    </div>
                    
                    <?php if(Session::has('error_agent')): ?>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endif; ?>

                    
                    <h1 class=" mt-10 text-center font-medium text-text">Upload License for validation</h1>
                    <div class="flex items-center justify-center w-full">

                        <label for="dropzone-agent"
                            class="flex relative overflow-hidden flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to
                                        upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 ">SVG, PNG, JPG or GIF (MAX.
                                    800x400px)</p>

                            </div>
                            <img id="previewAgent" src="" class="absolute" alt="...">
                            <input id="dropzone-agent" onchange="uploadFileAgent(this)" type="file"
                                name="license" class="hidden" />
                        </label>

                    </div>
                    
                    <?php if(Session::has('error_agent')): ?>
                        <?php $__errorArgs = ['license'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-red-500 font-semibold"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php endif; ?>

                    
                    <div class="relative mt-10">
                        <input type="checkbox" required value="example">
                        <label class="text-sm">
                            I have read and agree to the <a href="/privacy-policy"
                                class="text-blue-500 underline">Privacy Policy</a> and <a href="/terms_and_conditions"
                                class="text-blue-500 underline">Terms and Conditions</a>
                        </label>
                    </div>
                    
                    <div class="relative mt-7">
                        <button class="text-text bg-button px-2 w-full py-2 font-medium">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/trevorliamveloria/Downloads/Pro-price-main/resources/views/components/buyer/header.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'p-10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-10']); ?>
                    <div
                        class="flex flex-col items-center justify-center text-center">
                        <img
                            class="w-48 mr-6 mb-6"
                            src="<?php echo e(asset('images/no-image.png')); ?>"
                            alt="" />

                        <h3 class="text-2xl mb-2"><?php echo e($listing->title); ?>r</h3>
                        <div class="text-xl font-bold mb-4"><?php echo e($listing->company); ?></div>
                        <ul class="flex">
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">API</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                            >
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i> <?php echo e($listing->location); ?>

                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Job Description
                            </h3>
                            <div class="text-lg space-y-6">
                                <?php echo e($listing->description); ?>


                                <a
                                    href="<?php echo e($listing->email); ?>"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Employer</a
                                >

                                <a
                                    href="<?php echo e($listing->website); ?>"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-globe"></i> Visit
                                    Website</a
                                >
                            </div>
                        </div>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/miragalperina/laragigs/resources/views/listing.blade.php ENDPATH**/ ?>
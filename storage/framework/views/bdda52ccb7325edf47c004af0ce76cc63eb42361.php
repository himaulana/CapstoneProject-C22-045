

<?php $__env->startSection('title', 'My Garden'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-xl text-base text-center my-5">
        <h2 class="fw-bold fs-1 lh-sm text-break">My Profile
        </h2>
        <img src="https://source.unsplash.com/random/300x300/?user-profile" alt="Growing Plants"
            class="dblock mx-lg-auto img-fluid my-4" width="300px">
        
        <form action="<?php echo e(route('logout')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <button type="submit"
                class="tn btn-warning button-input mt-2 mx-auto px-5 py-3 fw-semibold d-block explore-button">Logout
            </button>
        </form>

    </div>
    <div class="col-10" style="margin: auto;">
        <div id="carouselExampleIndicators2" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $data->gardens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-10 col-md-6 col-lg-4">
                                    <div class="text-decoration-none text-base link-dark">
                                        <div class="card rounded-5 card-plant mb-3 text-center">
                                            <img src="https://source.unsplash.com/random/300x300/?decorative-plant,<?php echo e($item->id); ?>"
                                                class="m-3" alt="">
                                            <div class="card-body">
                                                <h3 class="fw-semibold"><a href="/plant/<?php echo e($item->id); ?>"
                                                        style="text-decoration: none; color:black"><?php echo e($item->name); ?></a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl text-base">
        <div class="row flex-lg-row-reverse align-items-center py-5">
            <div class="col-lg-7">
                <img src="<?php echo e(url('images/explore-image.png')); ?>" alt="Growing Plants"
                    class="dblock mx-lg-auto img-fluid filter-image" width="1200px">
            </div>
            <div class="col-12 col-lg-5 text-lg-start text-center">
                <h2 class="fw-bold fs-1 lh-sm text-break">Add a new plant
                </h2>
                <button type="button"
                    class="btn btn-warning button-input mt-5 mx-auto px-5 py-3 fw-semibold d-block explore-button"
                    data-bs-toggle="modal" data-bs-target="#addForm">Add</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-ijo">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addFormLabel">Add Plant</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('garden.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <select class="form-select" name="plant_id" id="plant_id" aria-label="Default select example">
                                <option value="">Select your plant</option>
                                <?php $__currentLoopData = $plants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl text-base text-center">
        <div class="row flex-lg-row align-items-center pb-5 pt-lg-">
            <div class="col-lg-7">
                <img src="<?php echo e(url('images/tips-image.png')); ?>" alt="Growing Plants" class="dblock mx-lg-auto img-fluid"
                    width="700px">
            </div>
            <div class="col-12 col-lg-5 text-lg-start text-center">
                <h2 class="fw-semibold fs-1 lh-sm mb-4 text-break">Houseplant care tips for beginner
                </h2>
                <p class="fw-semibold text-wrap text-break">Lorem Ipsum is simply dummy text of the printing and
                    typesetting
                    industry.<br>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a
                    gallery of type and scrambled it to make a type specimen book.</p>
                <button type="button" class="btn button-input mt-2 px-5 py-3 fw-semibold explore-button">Explore
                    Now</button>
            </div>
        </div>
    </div>

    <div class="container-xl contact-us p-5 text-base position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class=" form-email py-3 px-2 border border-white">
                <div class="mb-2">
                    <input type="email" class="form-control input-email" id="exampleFormControlInput1"
                        placeholder="Email">
                </div>
                <div class="mb-2">
                    <textarea class="form-control input-email" id="exampleFormControlTextarea1" placeholder="Type your message.."></textarea>
                </div>
                <div class="mb-2 text-center">
                    <button class="btn btn-primary shadow-none rounded-4 w-75 input-email text-white ">Send
                        now</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Maulana\Documents\CapstoneProject-C22-045\resources\views/profile.blade.php ENDPATH**/ ?>
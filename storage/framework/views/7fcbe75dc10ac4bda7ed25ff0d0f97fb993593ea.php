

<?php $__env->startSection('title', 'Tanaman'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-xl mt-5">
        <div class="card detail-card">
            <div class="row g-0">
                <div class="col-12 col-md-4">
                    <img src="<?php echo e($plant->link_image); ?>.<?php echo e($plant->id); ?>" class="img-fluid filter-image-detail"
                        alt="<?php echo e($plant->name); ?>">
                </div>
                <div class="col-12 col-md-8">
                    <div class="card-body ms-4 ms-lg-5 add-vh60 mb-3">
                        <table>
                            <tr>
                                <td>
                                    Botani name
                                </td>
                                <td>
                                    : <?php echo e($plant->botanic_name); ?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Common name
                                </td>
                                <td>
                                    : <?php echo e($plant->name); ?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Plant type
                                </td>
                                <td>
                                    : <?php echo e($plant->type); ?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Plant rating
                                </td>
                                <td>
                                    : <?php echo e($plant->rating); ?>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xl mt-5">
            <div class="card detail">
                <div class="card-body position-relative card-tanaman mx-4 my-3">
                    <h5 class="card-title position-absolute top-0 start-0 p-3 fw-semibold ">Deskripsi Tanaman</h5>
                    <p class="card-text mt-4"><?php echo e($plant->description); ?>

                        the
                        card's
                        content.</p>
                </div>
            </div>
        </div>
        <div class="container-xl mt-5">
            <div class="card detail">
                <div class="card-body position-relative card-tanaman mx-4 my-3">
                    <h5 class="card-title position-absolute top-0 start-0 p-3 fw-semibold">Cara Menanam</h5>
                    <p class="card-text mt-4"><?php echo e($plant->how_plant); ?>

                        the
                        card's
                        content.</p>
                </div>
            </div>
        </div>
        <div class="container-xl mt-5">
            <div class="card detail">
                <div class="card-body position-relative card-tanaman mx-4 my-3">
                    <h5 class="card-title position-absolute top-0 start-0 p-3 fw-semibold">Cara Merawat</h5>
                    <p class="card-text mt-4"><?php echo e($plant->care_plant); ?>

                        the
                        card's
                        content.</p>
                </div>
            </div>
        </div>
        <div class="container-xl mt-5">
            <div class="card detail">
                <div class="card-body position-relative card-tanaman mx-4 my-3">
                    <h5 class="card-title position-absolute top-0 start-0 p-3 fw-semibold">Hama dan Penyakit</h5>
                    <p class="card-text mt-4"><?php echo e($plant->pest_disease); ?>

                        of the
                        card's
                        content.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-6">
                    <h2 class="fw-semibold mb-5 px-auto">More Plant</h2>
                </div>
                <div class="col-6 text-end">
                    <a href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <button class="rounded-2 less-than bg-transparent mx-auto"><svg width="17" height="25"
                                viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 2L3 12.5L15 23" stroke="#0F222B" stroke-width="3" stroke-linecap="round" />
                            </svg>
                        </button>
                    </a>
                    <a href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <button class="rounded-2 more-than ms-4 mx-auto"><svg width="17" height="25"
                                viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2L14 12.5L2 23" stroke="white" stroke-width="3" stroke-linecap="round" />
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <?php $__currentLoopData = $plants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                            <div class="text-decoration-none text-base link-dark">
                                                <div class="card rounded-5 card-plant mb-3 text-center">
                                                    <img src="https://source.unsplash.com/random/300x300/?decorative-plant,<?php echo e($item->id); ?>"
                                                        class="m-3" alt="">
                                                    <div class="card-body">
                                                        <h2 class="fw-semibold"><?php echo e($item->title); ?></h3>
                                                            <button type="button"
                                                                class="btn button-input mt-2 px-5 py-3 fw-semibold explore-button mb-4">
                                                                <a href="/plant/<?php echo e($item->id); ?>">Explore
                                                                    Now</a>
                                                            </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-xl contact-us3 p-5 text-base position-relative mt-5">
            <div class="position-absolute top-0 end-0 form-move border-random">
                <div class=" form-email2 pt-5 pb-3 px-2 border border-white">
                    <div class="mb-2">
                        <input type="email" class="form-control input-email2" id="exampleFormControlInput1"
                            placeholder="Email">
                    </div>
                    <div class="mb-2">
                        <textarea class="form-control input-email2 add-vh30" id="exampleFormControlTextarea1" placeholder="Type your message.."></textarea>
                    </div>
                    <div class="mb-2 text-center">
                        <button class="btn btn-warning shadow-none rounded-4 w-75 input-email2 text-white ">Send
                            now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const elem = document.querySelector('.noDiv');
        const btn = document.querySelector('.navbar-toggler');

        btn.addEventListener('click', function() {
            elem.outerHTML = elem.innerHTML;
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Maulana\Documents\CapstoneProject-C22-045\resources\views/detail/plant.blade.php ENDPATH**/ ?>
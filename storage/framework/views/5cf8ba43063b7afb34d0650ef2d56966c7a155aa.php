<nav class="navbar navbar-expand-md bg-ijo p-3 mb-4">
    <div class="container-sm d-flex ">
        <div class="flex-grow-1">
            <a class="fs-3 navbar-brand fw-semibold" href="/">Tand<span class="text-red">uran</span></a>
        </div>
        <?php if(auth()->guard()->check()): ?>
            <div class="order-sm-3">
                <a href="/mygarden" class="nav-link text-dark ms-3">
                    <img src="<?php echo e(url('/images/icon-profile.png')); ?>" alt="Profile icon" width="42px">
                </a>
            </div>
        <?php endif; ?>
        <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fw-semibold text-start justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav fw-semibold">
                <li class="nav-item">
                    <a class="nav-link text-base me-3" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-base me-3" href="/explore">Explore</a>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link text-base me-3" href="/login">
                            Log In
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-base me-3" href="/register">
                            Sign Up
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-base me-3">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1_40)">
                                    <path
                                        d="M11 20.949C11.385 20.9401 11.7544 20.7954 12.0429 20.5404C12.3315 20.2854 12.5205 19.9366 12.5767 19.5557H9.36224C9.41998 19.947 9.61789 20.304 9.91915 20.5603C10.2204 20.8166 10.6045 20.9547 11 20.949Z"
                                        fill="#0F222B" />
                                    <path
                                        d="M19.575 18.4139V17.4162L19.5364 17.3821L19.5346 17.3805C18.9116 16.8254 18.3663 16.1889 17.9134 15.488L17.8997 15.4668L17.8882 15.4443C17.3899 14.4699 17.0912 13.4058 17.0097 12.3145L17.0083 12.2959V12.2772V9.26005C17.0067 9.02953 16.9922 8.79936 16.9648 8.57062L19.575 18.4139ZM19.575 18.4139H2.36389V17.4162L2.40248 17.3821L2.40251 17.3822L2.40767 17.3775C3.02134 16.8206 3.55783 16.1842 4.00288 15.4852L4.01555 15.4653L4.02628 15.4443C4.52457 14.4699 4.82323 13.4058 4.90473 12.3145L4.90611 12.2959V12.2772L4.90612 9.25833L4.90611 9.25713C4.90257 7.78293 5.43249 6.35722 6.39803 5.24321C7.36357 4.1292 8.69954 3.40212 10.1593 3.1962L10.5894 3.13552V2.70111V1.90055C10.5894 1.81679 10.6227 1.73645 10.682 1.67722C10.7412 1.61799 10.8215 1.58472 10.9053 1.58472C10.989 1.58472 11.0694 1.61799 11.1286 1.67722C11.1878 1.73645 11.2211 1.81679 11.2211 1.90055V2.67055V3.11041L11.6574 3.16647C12.2064 3.23702 12.7424 3.38363 13.25 3.6017L19.575 18.4139ZM13.25 3.66576L13.25 3.66591V3.6663V3.66666H13.3958C13.4405 3.68731 13.485 3.70851 13.5292 3.73028L13.5605 3.66666L13.25 3.66576Z"
                                        stroke="#0F222B" />
                                    <path
                                        d="M18.4555 6.84451C20.1431 6.84451 21.5111 5.47649 21.5111 3.78895C21.5111 2.10142 20.1431 0.733398 18.4555 0.733398C16.768 0.733398 15.4 2.10142 15.4 3.78895C15.4 5.47649 16.768 6.84451 18.4555 6.84451Z"
                                        fill="#4BB604" />
                                    <path d="M17.6 2.61842V2.19995H19.0666V5.13328H18.2557V2.61842H17.6Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_40">
                                        <rect width="22" height="22" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Maulana\Documents\CapstoneProject-C22-045\resources\views/partials/navbar.blade.php ENDPATH**/ ?>
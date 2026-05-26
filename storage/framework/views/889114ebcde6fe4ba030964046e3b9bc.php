<?php $__env->startSection('content'); ?>
    <style>
        .card {
            max-width: 320px;
            display: flex;
            flex-direction: column;
            border-radius: 1.5rem;
            background-color: rgba(0, 0, 0, 1);
            padding: 1.5rem;
        }

        .price {
            font-size: 3rem;
            line-height: 1;
            font-weight: 300;
            letter-spacing: -0.025em;
            color: rgba(255, 255, 255, 1);
        }

        .lists {
            margin-top: 2.5rem;
            display: flex;
            flex-direction: column;
            grid-row-gap: 0.75rem;
            row-gap: 0.75rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            color: rgba(255, 255, 255, 1);
        }

        .list {
            display: flex;
            align-items: center;
        }

        .list svg {
            height: 1rem;
            width: 1rem;
        }

        .list span {
            margin-left: 1rem;
        }

        .action {
            margin-top: 2rem;
            width: 100%;
            border: 2px solid rgba(255, 255, 255, 1);
            border-radius: 9999px;
            background-color: rgba(255, 255, 255, 1);
            padding: 0.625rem 1.5rem;
            text-align: center;
            font-size: 0.875rem;
            line-height: 1.25rem;
            color: rgba(0, 0, 0, 1);
            outline: none;
            transition: all .2s ease;
        }

        .action:hover {
            color: rgba(255, 255, 255, 1);
            background-color: transparent;
        }
    </style>
    <div class="container my-5">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel col-lg-6 col-ms-12 my-3 slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/shoes1/<?php echo e($shoes->image); ?> " class="d-block w-75 h-75" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="/shoes1/<?php echo e($shoes->image2); ?>" class="d-block w-75 h-75" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="/shoes1/<?php echo e($shoes->image3); ?>" class="d-block w-75 h-75" alt="Slide 2">
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-ms-12 my-4 d-flex d-flex justify-content-center">
                <div class="card">
                    <p class="price">
                        <?php echo e($shoes->name); ?>

                    </p>
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="/" class="action">
                                Add to cart
                            </a>
                        <?php else: ?>
                            <a href="/login" class="action">
                                Add to cart
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                    <ul class="lists">
                        <li class="list">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#ffffff"
                                        d="M21.5821 5.54289C21.9726 5.93342 21.9726 6.56658 21.5821 6.95711L10.2526 18.2867C9.86452 18.6747 9.23627 18.6775 8.84475 18.293L2.29929 11.8644C1.90527 11.4774 1.89956 10.8443 2.28655 10.4503C2.67354 10.0562 3.30668 10.0505 3.70071 10.4375L9.53911 16.1717L20.1679 5.54289C20.5584 5.15237 21.1916 5.15237 21.5821 5.54289Z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </g>
                            </svg>
                            <span> <?php echo e($shoes->price); ?> $ </span>
                        </li>
                        <li class="list">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#ffffff"
                                        d="M21.5821 5.54289C21.9726 5.93342 21.9726 6.56658 21.5821 6.95711L10.2526 18.2867C9.86452 18.6747 9.23627 18.6775 8.84475 18.293L2.29929 11.8644C1.90527 11.4774 1.89956 10.8443 2.28655 10.4503C2.67354 10.0562 3.30668 10.0505 3.70071 10.4375L9.53911 16.1717L20.1679 5.54289C20.5584 5.15237 21.1916 5.15237 21.5821 5.54289Z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </g>
                            </svg>
                            <span> 40 41 42 43 </span>
                        </li>
                        <li class="list">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#ffffff"
                                        d="M21.5821 5.54289C21.9726 5.93342 21.9726 6.56658 21.5821 6.95711L10.2526 18.2867C9.86452 18.6747 9.23627 18.6775 8.84475 18.293L2.29929 11.8644C1.90527 11.4774 1.89956 10.8443 2.28655 10.4503C2.67354 10.0562 3.30668 10.0505 3.70071 10.4375L9.53911 16.1717L20.1679 5.54289C20.5584 5.15237 21.1916 5.15237 21.5821 5.54289Z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </g>
                            </svg>
                            <span> color : black white red </span>
                        </li>
                        <li class="list">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#ffffff"
                                        d="M21.5821 5.54289C21.9726 5.93342 21.9726 6.56658 21.5821 6.95711L10.2526 18.2867C9.86452 18.6747 9.23627 18.6775 8.84475 18.293L2.29929 11.8644C1.90527 11.4774 1.89956 10.8443 2.28655 10.4503C2.67354 10.0562 3.30668 10.0505 3.70071 10.4375L9.53911 16.1717L20.1679 5.54289C20.5584 5.15237 21.1916 5.15237 21.5821 5.54289Z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </g>
                            </svg>
                            <span> module </span>
                        </li>
                        <li class="list">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#ffffff"
                                        d="M21.5821 5.54289C21.9726 5.93342 21.9726 6.56658 21.5821 6.95711L10.2526 18.2867C9.86452 18.6747 9.23627 18.6775 8.84475 18.293L2.29929 11.8644C1.90527 11.4774 1.89956 10.8443 2.28655 10.4503C2.67354 10.0562 3.30668 10.0505 3.70071 10.4375L9.53911 16.1717L20.1679 5.54289C20.5584 5.15237 21.1916 5.15237 21.5821 5.54289Z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </g>
                            </svg>
                            <span> </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            let counter = 0;

            setInterval(() => {
                counter++;

                if (counter > 2) {
                    counter = 0;
                }

                const carouselSlides = document.querySelectorAll('.carousel-item');
                carouselSlides.forEach((slide) => slide.classList.remove('active'));
                carouselSlides[counter].classList.add('active');
            }, 3000);
        </script>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\OneDrive\Desktop\shoes shop\PFE\resources\views/products/shoes.blade.php ENDPATH**/ ?>
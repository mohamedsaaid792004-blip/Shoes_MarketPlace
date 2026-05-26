<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .card {
            position: relative;
            width: 190px;
            height: 254px;
            background: #454545;
            border: solid 4px #333;
            box-shadow: -5px 5px #333;
            transition: all .2s ease-in-out;
            display: flex;
            justify-content: center;
            cursor: pointer;
        }

        .card:hover {
            margin: 0 10px 0 0;
            box-shadow: 0px 0px #333;
        }

        .card .img-card {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: calc(100% - 50px);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: filter .2s 1s ease-in-out;
        }

        .card:hover .img-card {
            filter: blur(1px);
        }

        .card .show-more {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: calc(100% - 50px);
            background-color: rgba(0, 0, 0, 0.1);
            text-align: center;
            line-height: 250px;
            font-weight: bold;
            font-size: 19px;
            opacity: 0;
        }

        .card:hover .show-more {
            opacity: 1;
            transition: opacity .3s .2s ease-in-out;
        }

        .card .info-card {
            position: absolute;
            height: 50px;
            width: 100%;
            bottom: 0;
            left: 0;
            right: 0;
            border-top: solid 1px #FFE6C7;
        }

        .card .info-card p {
            font-size: 14px;
            margin: 5px;
            color: #FFE6C7;
        }



        .img {
            width: 100%;
            height: auto;
        }

        .slider {
            width: 700px;
            height: 450px;
        }

        .img-slide {
            width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .show {
            opacity: 1;
        }
        @media (max-width:700px){
            .slider {
            width: 700px;
            height: 350px;
        }
        }

    </style>

    <div class='container'>
        <div class=" d-flex justify-content-center ">
            <div class="slider position-relative  my-3 ">
                <img src="jjjjj.jpg" class="img-slide img-slide-1 show" alt="">
                <img src="kkkkkk.jpg" class="img-slide img-slide-2" alt="">
                <img src="off.jpg" class="img-slide img-slide-3" alt="">
                <img src="R.jpg" class="img-slide img-slide-4" alt="">
            </div>
            <script src="script.js"></script>
        </div>
        <div class="row">
            <?php $__currentLoopData = $shoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shoes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-md-6 d-flex justify-content-center col-sm-12 my-3 ">
                    <div class="card">
                        <div class="img-card ">
                            <img src="shoes1/<?php echo e($shoes->image2); ?>" class="img" alt="img">

                        </div>
                        <div class="show-more">
                            <a href="/produi/<?php echo e($shoes->id); ?>">
                                <i class="fa-solid fa-eye" style="color:#FFE6C7;"></i>
                            </a>
                        </div>
                        <div class="info-card">
                            <p><strong><?php echo e($shoes->name); ?></strong></p>
                            <p><?php echo e($shoes->price); ?>$</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\OneDrive\Desktop\shoes shop\PFE\resources\views/products/products.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        .header {
            position: relative;
            overflow: hidden;
            background-size: cover;
            position: relative;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #454545;
        }

        .photo {
            width: 100px;
        }

        .nav-links {
            flex: 1;
            text-align: right;

        }

        .nav-links ul li {
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }

        .nav-links ul li a {
            color: #FFE6C7;
            text-decoration: none;
            Font: size 13px;
        }

        .nav-links ul li::after {
            content: '';
            width: 0px;
            height: 3px;
            background: #f44336;
            display: block;
            margin: auto;
            transition: 0.5s;
            position: relative;
            left: 0;

        }

        .nav-links ul li:hover::after {
            width: 100%;
        }




        .hero-btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            padding: 12px 34px;
            font-size: 13px;
            background: transparent;
            position: relative;
            cursor: pointer;
        }

        .hero-btn:hover {
            border: 1px solid #f44336;
            background: #454545;
            color: #FFE6C7;
            transition: 1s;

        }

        nav .fa {
            display: none;
        }


        @media(max-width:700px) {

            .nav-links ul li {
                display: block;
            }

            .header {
                min-height: 100vh;
                width: 100%;
            }

            .nav-links {
                position: absolute;
                background: #454545;
                height: 100vh;
                width: 200px;
                top: 0%;
                right: -200px;
                text-align: left;
                z-index: 2;
                transition: 1s;
            }

            nav {
                background-color: #FFA559;
            }

            nav .fa {
                display: block;
                color: #fff;
                margin: 10px;
                font-size: 22px;
                cursor: pointer;
            }

            .nav-links ul {
                padding: 30px;
            }
        }

        .body {
            background-color: #FFE6C7;
        }

        .p {
            font-size: 70px;
            color: #454545;
            font-family: melted monster;
        }

        .img-hero {
            rotate: -15deg;
        }

        /*footer*/
        .footer {
            width: 100%;
            text-align: center;
            padding: 30px 0;

        }

        .icons .fa {
            color: #f44336;
            margin: 0 13px;
            cursor: pointer;
            padding: 18px 0;

        }

        .fa-heart-o {
            color: #f44336;
        }


        .bt {
            border: none;
            background: none;
            color: #FFE6C7;

        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="body">
    <div class="header">
        <nav>
            <div> <img src="websitLogs.png" class="photo"></div>

            <div class="nav-links" id="navlinks">
                <i class=" fa fa-sharp fa-solid fa-rectangle-xmark" onclick="hideMenu()"></i>
                <ul>
                    <LI> <a href="/">HOME</a></LI>
                    <LI> <a href="/products">PRODUCTS</a></LI>
                    <li> <a href="#qq">ABOUT US</a></li>
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                          
                            <li><a>
                                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class=" bt" type="submit">LOGOUT</button>
                                </form>
                            </a></li>
                        <?php else: ?>
                            <li><a class="a" href="<?php echo e(route('login')); ?>"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">LOG
                                    IN</a></li>

                            <?php if(Route::has('register')): ?>
                                <li> <a class="a" href="<?php echo e(route('register')); ?>"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">REGISTER</a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>


    <script>
        var navlinks = document.getElementById("navlinks");

        function showMenu() {
            navlinks.style.right = "0";
        }

        function hideMenu() {
            navlinks.style.right = "-200px";
        }
    </script>

</body>

</html>
<?php /**PATH C:\Users\dell\OneDrive\Desktop\shoes shop\PFE\resources\views/home.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Shop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --dark: #454545;
            --orange: #FFA559;
            --deep-orange: #FF6000;
            --light: #FFE6C7;
            --red: #f44336;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--orange);
        }

        /* NAVBAR */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--dark);
            padding: 12px 25px;
            position: relative;
        }

        .photo {
            width: 80px;
        }

        .nav-links {
            flex: 1;
            text-align: right;
        }

        .nav-links ul {
            margin: 0;
            padding: 0;
        }

        .nav-links ul li {
            list-style: none;
            display: inline-block;
            margin: 0 10px;
            position: relative;
        }

        .nav-links ul li a {
            color: var(--light);
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-links ul li a:hover {
            color: white;
        }

        .nav-links ul li::after {
            content: '';
            width: 0%;
            height: 2px;
            background: var(--red);
            display: block;
            margin: auto;
            transition: 0.4s;
        }

        .nav-links ul li:hover::after {
            width: 100%;
        }

        /* HERO */
        .hero {
            background: var(--deep-orange);
            margin: 40px auto;
            border-radius: 20px;
            padding: 50px;
            max-width: 1200px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .hero h1 {
            font-size: 60px;
            color: var(--dark);
            font-weight: bold;
        }

        .hero p {
            color: var(--light);
            font-size: 18px;
        }

        .hero-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            border-radius: 30px;
            border: 2px solid white;
            color: white;
            text-decoration: none;
            transition: 0.4s;
        }

        .hero-btn:hover {
            background: var(--dark);
            color: var(--light);
        }

        .img-hero {
            width: 100%;
            transform: rotate(-10deg);
            transition: 0.5s;
        }

        .img-hero:hover {
            transform: rotate(0deg) scale(1.05);
        }

        /* MOBILE MENU */
        nav .fa {
            display: none;
            color: white;
            font-size: 22px;
            cursor: pointer;
        }

        @media(max-width:768px) {
            .nav-links {
                position: absolute;
                top: 0;
                right: -220px;
                background: var(--dark);
                height: 100vh;
                width: 200px;
                text-align: left;
                padding-top: 60px;
                transition: 0.5s;
            }

            .nav-links ul li {
                display: block;
                margin: 20px;
            }

            nav .fa {
                display: block;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero {
                padding: 30px;
            }
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 40px 0;
            color: var(--dark);
        }

        .icons i {
            margin: 0 10px;
            color: var(--red);
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        .icons i:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <img src="websitLogs.png" class="photo">

        <i class="fa fa-bars" onclick="showMenu()"></i>

        <div class="nav-links" id="navlinks">
            <i class="fa fa-xmark" onclick="hideMenu()"></i>
            <ul>
                <li><a href="/products">PRODUCTS</a></li>
                <li><a href="#qq">ABOUT US</a></li>

                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                    <?php else: ?>
                        <li><a href="<?php echo e(route('login')); ?>">LOG IN</a></li>
                        <?php if(Route::has('register')): ?>
                            <li><a href="<?php echo e(route('register')); ?>">REGISTER</a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- HERO -->
    <div class="hero container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Your Shop</h1>
                <p>Discover amazing products with a modern shopping experience.</p>
                <a href="#" class="hero-btn">Visit to Know More</a>
            </div>

            <div class="col-md-6 text-center">
                <img src="jo.png" class="img-hero">
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <section class="footer" id="qq">
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>
        </div>
    </section>

    <script>
        var navlinks = document.getElementById("navlinks");

        function showMenu() {
            navlinks.style.right = "0";
        }

        function hideMenu() {
            navlinks.style.right = "-220px";
        }
    </script>

</body>
</html><?php /**PATH C:\Users\dell\OneDrive\Desktop\shoes shop\PFE\resources\views/welcome.blade.php ENDPATH**/ ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        .bg{
            background-color: #FFA559;
            height: 100vh;
        }
        .input{
            background-color: #454545;
            color: #FFE6C7;
        }
        .card{
            background-color: #FF6000;
            color: #FFE6C7;
        }
    </style>
</head>
<body class="bg">
<div class="row justify-content-center rida mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title w-50 d-flex justify-content-end mx-5"><img class="w-50 " src="logo.png" alt=""></h1>
                </div>
                <div class="card-body ">
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e(Session::get('error')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" name="email" class="input form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password :</label>
                            <input type="password" name="password" class="input form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn input">Login</button>
                            </div>
                        </div>
                        <a href="/register">register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\dell\OneDrive\Desktop\shoes shop\PFE\resources\views/login.blade.php ENDPATH**/ ?>
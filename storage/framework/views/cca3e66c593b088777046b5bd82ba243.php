<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Dashboard </title>
    <style>
        .body{
          background-color: rgb(255, 255, 255);

        }
        *{
          font-family: aldrich;
        }
       .navbar1{
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: space-between;
          background-color: whitesmoke;
          padding: 15px;
          box-shadow: rgb(123, 123, 123) 1px 4px 8px 5px;
        }

        .navbar1 a{
         text-decoration: none;
         color: rgb(56, 56, 56);
         position: relative;
         display: inline-block;
        }
        a::before{
          content: '';
         position: absolute;
          left: 0;
         bottom: 0;
         width: 100%;
         height: 3px;
         background-color: rgb(66, 66, 66);
         border-radius: 4px;
          scale: 0 1;
          transform-origin: right;
         transition: scale 0.25s;
        }
        a:hover::before{
         scale: 1;
         transform-origin: left;
        }
        .logo1{
          margin-right: 50px;
        }
       .list1{
         list-style: none;
         display: flex;
         gap: 25px;
        }
        #toggler, .navbar1 label{
         display: none;
        }

        @media screen and (max-width:600px){
         .men{
           width: 100%;
           max-height: 0;
           overflow: hidden;
        }
        .list1{
           flex-direction: column;
           align-items: center;
           padding: 20px;
        }
        .navbar1 label{
           display: inline-flex;
          align-items: center;
          cursor: pointer;
        }
        #toggler:checked ~.men{
          max-height: 100%;
        }

    }
    .bt{
        border: none;
        background: none;
    }

    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="body">
    <nav class="navbar1">
        <a href="#" class="logo1">MNF</a>
        <input type="checkbox" id="toggler" />
        <label for="toggler"><i class="fa-solid fa-list"></i></label>
        <div class="men">
            <ul class="list1">
                <li><a href="/add">Add</a></li>
                <li><a href="/show">Show</a></li>

                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="bt" type="submit">Logout</button>
            </form>

            </ul>
        </div>


       

</nav>


    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html>
<?php /**PATH C:\Users\dell\OneDrive\Desktop\shoes shop\PFE\resources\views/admin/home.blade.php ENDPATH**/ ?>
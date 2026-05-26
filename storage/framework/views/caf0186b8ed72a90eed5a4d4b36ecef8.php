<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .add {
            color: black;
        }
        .button {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: rgb(20, 20, 20);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: .3s;
  overflow: hidden;
  position: relative;
}

.svgIcon {
  width: 12px;
  transition-duration: .3s;
}

.svgIcon path {
  fill: white;
}

.button:hover {
  width: 140px;
  border-radius: 50px;
  transition-duration: .3s;
  background-color: rgb(255, 69, 69);
  align-items: center;
}

.button:hover .svgIcon {
  width: 50px;
  transition-duration: .3s;
  transform: translateY(60%);
}

.button::before {
  position: absolute;
  top: -20px;
  content: "Delete";
  color: white;
  transition-duration: .3s;
  font-size: 2px;
}

.button:hover::before {
  font-size: 13px;
  opacity: 1;
  transform: translateY(30px);
  transition-duration: .3s;
}
    </style>
    <div class="add my-5">
        <?php if(session('message')): ?>
                <div class="alert alert-success"><?php echo e(session('message')); ?></div>
            <?php endif; ?>
        <table class="table text-dark my-5  border" id="myTable">

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">image 1</th>
                    <th scope="col">image 2</th>
                    <th scope="col">image 3</th>
                    <th scope="col">supp</th>
                    <th scope="col">modifier</th>
                </tr>
            </thead>

            <tbody>

                <?php $__currentLoopData = $shoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shoes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($shoes->id); ?></th>
                        <td><?php echo e($shoes->name); ?></td>
                        <td><?php echo e($shoes->price); ?>$</td>
                        <td><img src="shoes1/<?php echo e($shoes->image); ?>" class="w-25" alt="img"></td>
                        <td><img src="shoes1/<?php echo e($shoes->image2); ?>" class="w-25" alt="img"></td>
                        <td><img src="shoes1/<?php echo e($shoes->image3); ?>" class="w-25" alt="img"></td>
                        <td><a href="/edit/<?php echo e($shoes->id); ?>"><button class="btn btn-primary" type="button"> Update
                                </button></a></td>
                        <td>


                            <a  href="/delete/<?php echo e($shoes->id); ?>">
                                <button class="button">
                                    <svg class="svgIcon" viewBox="0 0 448 512">
                                        <path
                                            d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                        </path>
                                    </svg>
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>



        <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
            integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
        <script>
            let table = new DataTable('#myTable');
        </script>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\OneDrive\Desktop\shoes shop\PFE\resources\views/admin/show.blade.php ENDPATH**/ ?>
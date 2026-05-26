<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>
        <div class="container w-75 my-5 p-5"
            style="background:whitesmoke; box-shadow: black 1px 4px 8px;border-radius:15px">
            <?php if(session('message')): ?>
                <div class="alert alert-success"><?php echo e(session('message')); ?></div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form class="form-group" action="/add" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mx-3">
                    <label for="Name">Name</label>
                    <input type="text" name='name' class="form-control" id="Name">
                </div>

                <div class="mx-3">
                    <label for="price">Price</label>
                    <input class="form-control" type="number" name='price'>
                </div>
                <div class="mx-3 ">
                    <label for="formFile" class="form-label">image</label>
                    <input class="form-control " type="file" id="formFile" value="file" name="image">
                </div>
                <div class="mx-3 ">
                    <label for="formFile" class="form-label">image2</label>
                    <input class="form-control " type="file" id="formFile" value="file" name="image2">
                </div>
                <div class="mx-3 ">
                    <label for="formFile" class="form-label">image3</label>
                    <input class="form-control " type="file" id="formFile" value="file" name="image3">
                </div>
                <button type="submit" class="btn btn-outline-info m-3">Exporter</button>
            </form>
        </div>
    </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\OneDrive\Desktop\shoes shop\PFE\resources\views/admin/add.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>
        <div class="container w-75 my-5 p-5"
            style="background:whitesmoke; box-shadow: black 1px 4px 8px;border-radius:15px">

            <form class="form-group" action="/edit/<?php echo e($shoes->id); ?>" method="get" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="mx-3">
                    <label for="Name">Name</label>
                    <input type="text" name='name' class="form-control" value=<?php echo e($shoes->name); ?> id="Name">
                </div>

                <div class="mx-3">
                    <label for="price">Price</label>
                    <input class="form-control" type="number"  value=<?php echo e($shoes->price); ?>  name='price' required>
                </div>
                <div class="mx-3 ">
                    <label for="formFile" class="form-label">image</label>
                    <input class="form-control " type="file" id="formFile" value="file" name="image">
                </div>
                <div class="mx-3 ">
                    <label for="formFile" class="form-label">image2</label>
                    <input class="form-control " type="file" id="formFile" value="file" name="image2">
                </div>
                <button type="submit" class="btn btn-outline-info m-3">Exporter</button>
            </form>
        </div>
    </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\OneDrive\Desktop\shoes shop\PFE\resources\views/Admin/edit.blade.php ENDPATH**/ ?>

   
<?php $__env->startSection('content'); ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>
                <div class="card-body">
                <a class="btn btn-primary float-right mb-4" href="<?php echo e(url('/add-product')); ?>">Add product</a>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <th scope="row"><?php echo e($products->id); ?></th>
                        <td><?php echo e($products->name); ?></td>
                        <td><?php echo e($products->price); ?></td>
                        <td><?php echo e($products->category_id); ?></td>
                        <td style="display:flex">
                        <div>
                        <a class="btn btn-primary mr-2" href="<?php echo e(url('/edit-product/'.$products->id)); ?>">Edit</a>
                        </div>
                        <form action="<?php echo e(url('/delete-product/'.$products->id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger" type="submit">Delete</div>      
                        </form>
                        </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laravel\userauth\resources\views/product.blade.php ENDPATH**/ ?>
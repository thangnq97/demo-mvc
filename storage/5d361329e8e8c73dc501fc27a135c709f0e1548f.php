<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <form action="./save-edit-product?id=<?php echo e($product->id); ?>" method="post">
            <div class="mb-3 mt-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo e($product->name); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input class="form-control"name="price" value="<?php echo e($product->price); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <input class="form-control"name="description" value="<?php echo e($product->description); ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <select name="cate_id" class="form-control">
                    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cate->id); ?>" <?php if($cate->id == $product->cate_id): ?>
                                selected
                            <?php endif; ?>
                            ><?php echo e($cate->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
    </form>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\php2\demo-mvc\app\views/admin/edit-product.blade.php ENDPATH**/ ?>
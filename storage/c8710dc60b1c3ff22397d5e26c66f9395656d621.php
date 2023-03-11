<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <a href="./add-product" class="btn btn-success">Add Product</a>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>DESC</th>
            <th>ACTION</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $listItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($pro->id); ?></td>
                <td><?php echo e($pro->name); ?></td>
                <td><?php echo e($pro->price); ?></td>
                <td><?php echo e($pro->description); ?></td>
                <td>
                    <a class="btn btn-primary" href="./edit-product?id=<?php echo e($pro->id); ?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-product?id=<?php echo e($pro->id); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html><?php /**PATH C:\xampp\htdocs\demo-mvc\app\views/homepage/index.blade.php ENDPATH**/ ?>
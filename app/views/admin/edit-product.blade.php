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
        <form action="./save-edit-product" method="post">
            <input type="hidden" value="<?= $product->id?>" name="id">
            <div class="mb-3 mt-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $product->name?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input class="form-control"name="price" value="<?php echo $product->price?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Desc</label>
                <input class="form-control"name="desc" value="<?php echo $product->description?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
    </form>
    </div>
</body>
</html>
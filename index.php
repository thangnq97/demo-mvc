<?php
    // mong muốn tất cả các request đều đi qua file index.php
    $url = isset($_GET['url']) ? $_GET['url'] : '/';

    require_once './app/controllers/HomeController.php';
    require_once './app/controllers/ProductController.php';
    require_once './app/models/BaseModel.php';
    require_once './app/models/Product.php';
    require_once './app/models/Product.php';
    
    use App\Controllers\HomeController;
    use App\Controllers\ProductController;


    switch ($url) {
        case '/':
            $ctr = new HomeController();
            echo $ctr->index();
            break;
        case 'detail':
            $ctr = new HomeController();
            echo $ctr->detail();
            break;
        case 'contact':
            $ctr = new HomeController();
            echo $ctr->contact();
            break;
        case 'add-product':
            $ctr = new ProductController();
            echo $ctr->addProduct();
            break;
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }
?>
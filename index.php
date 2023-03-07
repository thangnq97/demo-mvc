<?php
    // mong muốn tất cả các request đều đi qua file index.php
    $url = isset($_GET['url']) ? $_GET['url'] : '/';

    require_once './vendor/autoload.php';
    
    use App\Controllers\HomeController;
    use App\Controllers\ProductController;
    use App\Controllers\CategoryController;


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
        case 'list-cate':
            $ctr = new CategoryController();
            echo $ctr->index();
            break;
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }
?>
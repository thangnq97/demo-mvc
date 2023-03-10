<?php
    // mong muốn tất cả các request đều đi qua file index.php
    $url = isset($_GET['url']) ? $_GET['url'] : '/';

    require_once './vendor/autoload.php';
    require_once './commons/database-config.php';
    
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
        case 'add-data':
            $ctr = new CategoryController();
            echo $ctr->addData();
            break;
        case 'edit-data':
            $ctr = new CategoryController();
            echo $ctr->editData();
            break;
        case 'delete-data':
            $ctr = new CategoryController();
            echo $ctr->deleteData();
            break;
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }
?>
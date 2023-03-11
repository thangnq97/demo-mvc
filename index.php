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
            $ctr->index();
            break;
        case 'detail':
            $ctr = new HomeController();
             $ctr->detail();
            break;
        case 'contact':
            $ctr = new HomeController();
             $ctr->contact();
            break;
        case 'add-product':
            $ctr = new ProductController();
             $ctr->addProduct();
            break;
        case 'list-cate':
            $ctr = new CategoryController();
             $ctr->index();
            break;
        case 'add-data':
            $ctr = new CategoryController();
             $ctr->addData();
            break;
        case 'edit-data':
            $ctr = new CategoryController();
             $ctr->editData();
            break;
        case 'delete-data':
            $ctr = new CategoryController();
             $ctr->deleteData();
            break;
        case 'add-product':
            $ctr = new ProductController();
             $ctr->addProduct();
            break;
        case 'save-add-product':
            $ctr = new ProductController();
             $ctr->saveAddProduct();
            break;
        case 'edit-product':
            $ctr = new ProductController();
             $ctr->editProduct();
            break;
        case 'save-edit-product':
            $ctr = new ProductController();
             $ctr->saveEditProduct();
            break;
        case 'delete-product':
            $ctr = new ProductController();
             $ctr->deleteProduct();
            break;
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }

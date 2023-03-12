<?php

namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
class HomeController extends BaseController
{
    public function index()
    {
        $products = Product::all();
        $cates = Category::all();
        $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
        $this->render('homepage.index', ['listItem' => $products,
                                         'msg' => $msg,
                                        'cates' => $cates]);
    }

    public function detail()
    {
        return 'Chi tiết sản phẩm';
    }

    public function contact()
    {
        return 'Liên hệ';
    }
}
?>
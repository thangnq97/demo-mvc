<?php

namespace App\Controllers;
use App\Models\Product;
class HomeController extends BaseController
{
    public function index()
    {
        $products = Product::all();
        $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
        $this->render('homepage.index', ['listItem' => $products,
                                         'msg' => $msg              ]);
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
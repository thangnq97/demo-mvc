<?php

namespace App\Controllers;
use App\Models\Product;
class HomeController extends BaseController
{
    public function index()
    {
        $products = Product::all();

        $this->render('homepage.index', ['listItem' => $products]);
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
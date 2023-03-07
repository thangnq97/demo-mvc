<?php

namespace App\Controllers;
use App\Models\Product;
class HomeController
{
    public function index()
    {
        $products = Product::all();
        include_once './app/views/homepage.php';
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
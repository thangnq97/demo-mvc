<?php
namespace App\Controllers;
use Illuminate\Database\Eloquent\Model;
    class ProductController extends Model{
        public function addProduct(){
            echo 'Thêm mới sản phẩm';
        }

    }
?>
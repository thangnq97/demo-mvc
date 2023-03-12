<?php
namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
    class ProductController extends BaseController{

        public function addProduct() {
            $cates = Category::all();
            $this->render('admin.add-product',  ['cates' => $cates]);
        }

        public function saveAddProduct(){
            if(isset($_POST['submit'])) {
                $data = $_POST;
                // $name = $_POST['name'];
                // $price = $_POST['price'];
                // $desc = $_POST['desc'];

                $model = new Product();
                // $product->name = $name;
                // $product->price = $price;
                // $product->description = $desc;
                $model->fill($data);
                // $model->cate_id = 1;
                $model->save();

                header('location: ./');
            }
        }

        public function editProduct() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            $product = Product::find($id);
            include_once './app/views/editProduct.php';
        }

        public function saveEditProduct(){
            if(isset($_POST['submit'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $desc = $_POST['desc'];

                $product = Product::find($id);
                $product->name = $name;
                $product->price = $price;
                $product->description = $desc;
                $product->save();

                header('location: ./');
            }
        }
        
        public function deleteProduct() {
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            if(!$id) {
                header('location: ./?msg=khong du thong tin de xoa');
                die;
            }
            $model = Product::find($id);
            $msg = '';
            if(!$model) {
                $msg = 'id khong ton tai';
            }
            if($model){
                Product::destroy($id);
                $msg = 'da xoa thanh cong';
                
            }
            header("location: ./?msg=$msg");
        }
    }
?>
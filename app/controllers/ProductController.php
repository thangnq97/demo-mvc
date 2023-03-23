<?php
namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
    class ProductController extends BaseController{

        public function addProduct() {
            $cates = Category::all();
            $this->render('admin.product.add-product',  ['cates' => $cates]);
        }

        public function saveAddProduct(){
            if(isset($_POST['submit'])) {
                $data = $_POST;
                $model = new Product();

                $model->fill($data);
                $model->save();

                header('location: ./');
            }
        }

        public function editProduct() {
            $cates = Category::all();
            $id = isset($_GET['id']) ? $_GET['id'] : null;
            $product = Product::find($id);
            $this->render('admin.product.edit-product',  ['cates' => $cates,
                                                'product' => $product
                                                ]);
        }

        public function saveEditProduct(){
            if(isset($_POST['submit'])) {
                $data = $_POST;
                $id = $_GET['id'];

                $product = Product::find($id);
                $product->fill($data);

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
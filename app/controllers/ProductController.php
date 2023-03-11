<?php
namespace App\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
    class ProductController extends Model{

        public function addProduct() {
            include_once './app/views/add-product.php';
        }

        public function saveAddProduct(){
            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $desc = $_POST['desc'];

                $product = new Product();
                $product->name = $name;
                $product->price = $price;
                $product->description = $desc;
                $product->cate_id = 1;
                $product->save();

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
            if($id) {
                Product::destroy($id);
            }
            header('location: ./');
        }
    }
?>
<?php

namespace App\Controllers;
use App\Models\Category;;
class CategoryController
{
    public function index()
    {
        echo 'Danh sách category';
    }

    public function addData() {
        $name = 'cate 3';

        $model = new Category();
        $model->name = $name;
        $model->save();
    }

    public function editData() {
        $id = 3;
        $name = 'cate 3';

        $model = Category::find($id);
        $model->name = $name;
        $model->save();
    }

    public function deleteData() {
        $id = 3;
        
        $model = new Category();
        $model->destroy($id);
    }
}
?>

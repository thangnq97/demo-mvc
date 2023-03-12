<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = "products";

    public $fillable = ['name', 'price', 'description', 'cate_id'];

    public $timestamps = false;
}

?>
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function getImage() {
        return "/storage/category_images/".$this->image;
    }
    public function category_products() {
        return $this->hasMany(Product::class);
    }
}

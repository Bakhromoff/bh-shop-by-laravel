<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $dates = ['discount'];
    protected $guarded = ['id'];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function getImage() {
        return "/storage/product_images/".$this->image;
    }
    public function carts() {
        return $this->hasMany(Cart::class);
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getImage() {
        return "/storage/ads_images/".$this->image;
    }
}

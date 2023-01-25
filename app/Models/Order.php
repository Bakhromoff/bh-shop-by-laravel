<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id','user_id',];
    protected $casts = [
        'user_order_products' => 'array',
        'user_product_counts' => 'array',
    ];
}

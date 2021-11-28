<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;

    protected $table = 'order_detatails';
    protected $fillable = [
        'order_id', 'product_id', 'unitprice',
        'quantity', 'amount', 'discount'
    ];
}

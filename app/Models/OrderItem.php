<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'order_id',  'stock_id', 'description','price', 'quantity',
    ];

    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }

    public function stock(){
        return $this->belongsTo(Stock::class,'stock_id');
    }
}

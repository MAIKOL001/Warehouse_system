<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'order_no',  'merchant_id','status', 'client_id', 'admin_id'
    ];

    public function merchant(){
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }



    public function orderItems(){
        return $this->hasMany(OrderItem::class,'order_id');
    }
}

<?php

namespace App\Models;

use App\Models\Bin;
use App\Models\Merchant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'category','warehouse_id','quality_pass','quality_fail', 'bin_id','price','quantity','merchant_id','admin_id',

    ];

    public function bin(){
        return $this->belongsTo(Bin::class, 'bin_id');
    }

    public function merchant(){
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }

    public function warehouse(){
        return $this->belongsTo(Warehouse::class, 'warehouse_id');
    }
}

<?php

namespace App\Models;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'phone', 'email','admin_id',

    ];

    public function stock(){
        return $this->hasMany(Stock::class, 'merchant_id');
    }
}

<?php

namespace App\Models;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bin extends Model
{
    use HasFactory;
    protected $fillable = [
        'bin_code','capacity', 'status','admin_id',

    ];

    public function stock(){
        return $this->hasMany(Stock::class, 'bin_id');
    }
}

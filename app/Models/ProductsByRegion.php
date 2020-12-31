<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsByRegion extends Model
{
    use HasFactory;
    protected $table = 'productsbyregion';
    public $timestamps = true;

    protected $fillable = ['user_id', 'name', 'description' , 'created_at'];
}

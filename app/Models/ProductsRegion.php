<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsRegion extends Model
{
    use HasFactory;
    protected $table = 'productsregion';
    public $timestamps = true;

    protected $fillable = ['user_id', 'name', 'description', 'img_url', 'created_at'];
}

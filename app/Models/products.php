<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;

    protected $fillable = ['user_id', 'productstype_id' ,'productsbyregion_id', 'name', 'description', 'img_url', 'created_at'];
}

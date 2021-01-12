<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipmentproduct extends Model
{
    use HasFactory;
    protected $table = 'equipmentproduct';
    public $timestamps = true;

    protected $fillable = ['user_id','product_id','equipment_id' ,'created_at'];
}

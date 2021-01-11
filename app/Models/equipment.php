<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{
    use HasFactory;
    protected $table = 'equipment';
    public $timestamps = true;

    protected $fillable = ['user_id', 'name', 'description', 'img_url', 'created_at'];
}

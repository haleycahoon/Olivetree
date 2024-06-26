<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    use HasFactory;

    protected $table = "clothes";

    protected $fillable = ['name', 'description', 'price', 'gender', 'category', 'itemname'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table='items';
    protected $fillable=['name','item','discreption','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
}

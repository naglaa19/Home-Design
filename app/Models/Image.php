<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Catch_;

class Image extends Model
{
    use HasFactory;

    protected $table='images';
    protected $fillable=['name','image','discreption','category_id','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

    public function Category()
    {
        return $this->belongsTo(Category::class ,'category_id');
    }
}

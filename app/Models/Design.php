<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $table='designs';
    protected $fillable=['name','photo','discreption','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

    public function User()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
}

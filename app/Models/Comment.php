<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table='comments';
    protected $fillable=['comment','user_id','design_id'];
    // protected $hidden=['created_at','updated_at'];

    public function User()
    {
        return $this->belongsTo(User::class ,'user_id' , 'id');
    }

    public function Design()
    {
        return $this->belongsTo(Design::class ,'design_id');
    }
}

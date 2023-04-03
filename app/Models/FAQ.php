<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;
    protected $table='f_a_q_s';
    protected $fillable=['question','answer','section_id','category_id','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

    public function Section()
    {
        return $this->belongsTo(QASection::class ,'section_id');
    }
}

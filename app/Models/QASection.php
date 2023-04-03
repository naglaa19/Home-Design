<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QASection extends Model
{
    use HasFactory;
    protected $table='q_a_sections';
    protected $fillable=['name','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

    public function FAQ()
    {
        return $this->hasMany(FAQ::class);
    }
}

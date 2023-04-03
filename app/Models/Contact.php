<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;
    protected $table='contacts';
    public $fillable = ['name', 'email', 'message','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];


}

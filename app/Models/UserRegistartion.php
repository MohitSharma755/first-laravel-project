<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegistartion extends Model
{
    protected $table='user_registartions';
    protected $fillable=['fname','lname','address','city','zip','country','mobile','email','password','image','login_type'];

    protected $primaryKey='userId';
    use HasFactory;
}

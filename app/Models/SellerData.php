<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerData extends Model
{
    use HasFactory;
    protected $table='seller_data';
    protected $fillable=['fname','lname','address','city','zip','country','mobile','email','password','image','login_type'];
    protected $primaryKey='sellerId';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
protected $table='checkouts';
protected $primarykey='id';

    use HasFactory;
}
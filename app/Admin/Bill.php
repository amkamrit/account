<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['particular', 'code', 'size','weight','qty','rate','amount','billnumber','name','address','date'];
}

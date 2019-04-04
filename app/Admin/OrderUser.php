<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class OrderUser extends Model
{
    protected $fillable = ['name', 'address', 'phone'];
}

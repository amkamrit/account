<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class billmaster extends Model
{
    protected $fillable = ['name', 'address', 'date','billnumber','pannumber'];
}

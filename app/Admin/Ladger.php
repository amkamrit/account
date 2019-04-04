<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Ladger extends Model
{
    protected $fillable = ['group', 'name', 'code','opBalanceDc','opBalance','note'];
}

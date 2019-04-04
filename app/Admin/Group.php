<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['parent_group', 'name', 'code'];
}

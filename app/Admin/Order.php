<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['particular', 'qty', 'weight','rate','amount','status','delivary_date','order_user_id'];
}

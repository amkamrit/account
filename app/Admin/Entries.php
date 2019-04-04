<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    protected $fillable = ['entrie_date', 'dr_cr', 'ladger','drAmount','crAmount','chequeNumber','narration','tag'];
}

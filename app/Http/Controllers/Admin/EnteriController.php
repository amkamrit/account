<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnteriController extends Controller
{
    public function index(){
    	return view('Admin.Entries.index');
    }
    public function create(){
    	return view('Admin.Entries.create');
    }
}

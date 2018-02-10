<?php

namespace Cleaning\Http\Controllers;

use Illuminate\Http\Request;
use Cleaning\Cleaner;

class Dashboard extends Controller
{
    public function index(){
    	$names = Cleaner::pluck('name','id')->prepend('Select','0');  
    	return view('index', compact('names'));
    }


}

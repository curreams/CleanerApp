<?php

namespace Cleaning\Http\Controllers;


use Illuminate\Http\Request;
use Cleaning\Cleaner;
use Cleaning\Flat;
use Cleaning\Register;

class RegisterController extends Controller
{
	public function index(){
		$names = Cleaner::pluck('name','id')->prepend('Select','');
		$flats = Flat::pluck('number', 'id')->prepend('Select','');
    	return view('register', compact('names','flats'))->with('message','na');
    }
  
    public function store(Request $request){

        $this->validate($request, [
            'Name' => 'required',
            'Flat' => 'required',
            'Date' => 'required'
        ]);
    	
    	\Cleaning\Register::create([
    		'cleaner_id'=> $request['Name'],
    		'flat_id'=>$request['Flat'],
    		'register_date' => $request['Date'],
    	]);	    	
    	return redirect('/register')->with('message','store');
    	
    }

    public function show($id){
    	
    }
    //
}

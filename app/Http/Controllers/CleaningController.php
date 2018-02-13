<?php

namespace Cleaning\Http\Controllers;

use Illuminate\Http\Request;
use Cleaning\Register;

class CleaningController extends Controller
{
    public function index(){
    	$cleaners = \Cleaning\Cleaner::All();
    	return view('cleaner.index', compact('cleaners'))->with('message','na');
    }
    public function create(){
    	return view('cleaner.create');
    }

    public function store(Request $request){
    	$this->validate($request, [
            'Name' => 'required',
            'Nationality' => 'required'
        ]);
    	
    	\Cleaning\Cleaner::create([
    		'name'=> $request['Name'],
    		'nationality'=>$request['Nationality'],
    	]);	    	
    	return redirect('/cleaner')->with('message','store');
    }

    public function show($id){
    	
    }

    public function getRegisters(Request $request, $id){
        if($request->ajax()){
            $registers=Register::registers($id);
            return response()->json($registers);
        }
    }
}

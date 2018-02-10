<?php

namespace Cleaning\Http\Controllers;

use Illuminate\Http\Request;
use Cleaning\Flat;

class FlatController extends Controller
{
	public function index(){
    	$flats = \Cleaning\Flat::All();
    	return view('flat.index', compact('flats'))->with('message','na');
    }
    public function create(){
    	return view('flat.create');
    }

    public function store(Request $request){
    	
    	
    	\Cleaning\Flat::create([
    		'number'=> $request['Number'],
    		'dimensions'=>$request['Dimension'],
    	]);	    	
    	return redirect('/flat')->with('message','store');
    }

    public function show($id){
    	
    }

    public function getRegister(Request $request, $id){
        if($request->ajax()){
            $flat=Flat::getFlatById($id);
            return response()->json($flat);
        }
    }
    //
}

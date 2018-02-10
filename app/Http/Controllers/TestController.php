<?php

namespace Cleaning\Http\Controllers;



class TestController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        return "Hi from Controller";
    }
    public function getName($name){
        return "Hi my name is ". $name;
    }
}

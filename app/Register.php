<?php

namespace Cleaning;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';

    protected $fillable = ['cleaner_id', 'flat_id', 'register_date'];

    public static function registers($id){
    	return Register::where('cleaner_id','=',$id)->get();
    }
}

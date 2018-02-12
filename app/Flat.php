<?php

namespace Cleaning;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
     protected $table ='flats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'dimensions',
    ];
    public static function getFlatById($id){
    	return Flat::where('id','=',$id)->get();
    }

    public function registers(){
        return $this->hasMany(Register::Class);
    }
}

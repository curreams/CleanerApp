<?php

namespace Cleaning;

use Illuminate\Database\Eloquent\Model;

class Cleaner extends Model
{
    
    protected $table ='cleaners';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nationality',
    ];

    public function registers(){
    	return $this->hasMany(Register::class);
    }	
}

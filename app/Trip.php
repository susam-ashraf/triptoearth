<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    
    protected $primaryKey = 'trip_id';
	
    public function catname(){
    	return $this->belongsTo('\App\District','district_id','district_id');
    }
}

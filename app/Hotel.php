<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guared = ['id'];

    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function categories()
    {
    	return $this->hasMany('App\Category', 'hotel_id');
    }
    
    public function rates()
    {
    	return $this->hasMany('App\Rate', 'hotel_id');
    }
}

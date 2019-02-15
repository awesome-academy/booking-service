<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $guared = ['id'];

    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function users()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function hotels()
    {
    	return $this->belongsTo('App\Hotel', 'hotel_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    protected $guared = ['id'];

    protected $date = [
    	'created_at',
    	'updated_at',
    	'deleted_at',
    ];

    public function rooms()
    {
    	return $this->belongsTo('App\Room', 'room_id');
    }
}

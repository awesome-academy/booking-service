<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
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

    public function users()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}

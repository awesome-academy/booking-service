<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    protected $guared = ['id'];
    
    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function rooms()
    {
    	return $this->belongsTo('App\Room', 'room_id');
    }

    public function orders()
    {
    	return $this->belongsTo('App\Order', 'order_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{	
	protected $guared = ['id'];

    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function feedbacks()
    {
    	return $this->hasMany('App\Feedback', 'room_id');
    }

    public function images()
    {
    	return $this->hasMany('App\Image', 'room_id');
    }

    public function order_details()
    {
        return $this->hasMany('App\orderDetail', 'room_id');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function utilities()
    {
        return $this->hasMany('App\Utility', 'room_id');
    }

    public function categories()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }
}

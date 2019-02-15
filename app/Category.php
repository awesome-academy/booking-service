<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guared = ['id'];

    protected $date = [
    	'created_at',
    	'updated_at',
    ];

    public function rooms()
    {
    	return $this->hasMany('App\Room', 'category_id');
    }

    public function hotels()
    {
    	return $this->belongsTo('App\Hotel', 'hotel_id');
    }
}

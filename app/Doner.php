<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
	public function person() {
		return $this->belongsTo(Person::class, 'doner_id');
    }
}

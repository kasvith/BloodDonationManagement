<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
	public function doner() {
		return $this->belongsTo(Person::class);
    }
}

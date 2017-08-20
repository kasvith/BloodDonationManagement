<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
    protected $table = 'doner';

	public function doner() {
		return $this->belongsTo(Person::class);
    }
}

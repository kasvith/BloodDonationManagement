<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalAddress extends Model
{
	public function hospital() {
		return $this->belongsTo(Hospital::class);
    }
}

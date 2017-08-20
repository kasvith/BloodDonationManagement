<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodBankAddress extends Model
{
	protected $table = 'blood_bank_addresses';

    public function bloodbank()
    {
    	return $this->belongsTo(BloodBank::class);
    }
}

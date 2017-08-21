<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Authenticatable
{
    protected $primaryKey = 'id';
}

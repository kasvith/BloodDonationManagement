<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
    protected $table = 'doner';

    public function belongsTo( $related, $foreignKey = null, $ownerKey = null, $relation = null ) {
    }
}

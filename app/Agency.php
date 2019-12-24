<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agencies';

    protected $guarded = [];

    public function roomOrders() {
        return $this->hasMany('App\RoomOrder');
    }
}

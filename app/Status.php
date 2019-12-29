<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function roomOrders()
    {
        return $this->hasMany('App\RoomOrder');
    }
}

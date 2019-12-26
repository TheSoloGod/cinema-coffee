<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomOrder extends Model
{
    protected $table = 'room_orders';

    protected $guarded = [];

    public function agency() {
        return $this->belongsTo('App\Agency');
    }
}

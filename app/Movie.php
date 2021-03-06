<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $guarded = [];

    public function category() {
        return $this->belongsTo('App\MovieCategory');
    }
}

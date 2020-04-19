<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    protected $table = 'movie_categories';

    protected $guarded = [];

    public function movies() {
        return $this->hasMany('App\Movie');
    }
}

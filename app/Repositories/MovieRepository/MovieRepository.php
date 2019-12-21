<?php


namespace App\Repositories\MovieRepository;


use App\Movie;
use App\Repositories\EloquentRepository\EloquentRepository;

class MovieRepository extends EloquentRepository implements MovieRepositoryInterface
{
    public function getModel()
    {
        return Movie::class;
    }
}

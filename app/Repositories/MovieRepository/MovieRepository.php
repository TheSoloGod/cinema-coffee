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

    public function getRecommendMovies()
    {
        $recommendMovies = $this->model->orderBy('id', 'asc')
            ->limit(4)
            ->get();
        return $recommendMovies;
    }

    public function getNewMovies()
    {
        $newMovies = $this->model->orderBy('id', 'desc')
            ->limit(4)
            ->get();
        return $newMovies;
    }

    public function searchMovie($keyWord)
    {
        $movies = $this->model->where('name', 'LIKE', '%' . $keyWord . '%' )
            ->limit(10)
            ->get();
        return $movies;
    }
}

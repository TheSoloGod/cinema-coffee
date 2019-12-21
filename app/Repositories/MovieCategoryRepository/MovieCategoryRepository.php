<?php


namespace App\Repositories\MovieCategoryRepository;


use App\MovieCategory;
use App\Repositories\EloquentRepository\EloquentRepository;

class MovieCategoryRepository extends EloquentRepository implements MovieCategoryRepositoryInterface
{
    public function getModel()
    {
        return MovieCategory::class;
    }
}

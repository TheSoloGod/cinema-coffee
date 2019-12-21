<?php


namespace App\Repositories\NewsRepository;


use App\News;
use App\Repositories\EloquentRepository\EloquentRepository;

class NewsRepository extends EloquentRepository implements NewsRepositoryInterface
{
    public function getModel()
    {
        return News::class;
    }
}

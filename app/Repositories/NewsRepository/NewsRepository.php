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

    public function getPromoNews()
    {
        return $this->model->where('type', 'Khuyến mãi')->first();
    }

    public function getHiringNews()
    {
        return $this->model->where('type', 'Tuyển dụng')->first();
    }

    public function getNewestNews()
    {
        return $this->model->where('type', 'Cafe phim')->orderBy('created_at', 'desc')->first();
    }
}

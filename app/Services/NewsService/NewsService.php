<?php


namespace App\Services\NewsService;


use App\Repositories\NewsRepository\NewsRepositoryInterface;

class NewsService implements NewsServiceInterface
{
    protected $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }
}

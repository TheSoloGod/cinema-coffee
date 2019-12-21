<?php


namespace App\Services\MovieCategoryService;


use App\Repositories\MovieCategoryRepository\MovieCategoryRepositoryInterface;

class MovieCategoryService implements MovieCategoryServiceInterface
{
    protected $movieCategoryRepository;

    public function __construct(MovieCategoryRepositoryInterface $movieCategoryRepository)
    {
        $this->movieCategoryRepository = $movieCategoryRepository;
    }
}

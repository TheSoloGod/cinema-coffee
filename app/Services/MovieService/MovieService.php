<?php


namespace App\Services\MovieService;


use App\Repositories\MovieRepository\MovieRepositoryInterface;

class MovieService implements MovieServiceInterface
{
    protected $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }
}

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

    public function getAll() {
        return $this->movieCategoryRepository->getAll();
    }

    public function store($data) {
        $this->movieCategoryRepository->create($data);
    }

    public function update($data, $id) {
        $currentMovieCategory = $this->movieCategoryRepository->getById($id);
        $this->movieCategoryRepository->update($data, $currentMovieCategory);
    }

    public function destroy($id) {
        $movieCategory = $this->movieCategoryRepository->getById($id);
        $this->movieCategoryRepository->delete($movieCategory);
    }

    public function findById($id) {
        return $this->movieCategoryRepository->getById($id);
    }
}

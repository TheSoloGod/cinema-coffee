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

    public function getAll() {
        return $this->movieRepository->getAll();
    }

    public function store($data) {
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
//        $fileTrailer = $data['trailer'];
//        $fileTrailer->move('upload/images', $fileTrailer->getClientOriginalName());
//        $data['trailer'] = $fileTrailer->getClientOriginalName();
        $this->movieRepository->create($data);
    }

    public function update($data, $id) {
        $currentMovie = $this->movieRepository->getById($id);
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $fileTrailer = $data['trailer'];
        $fileTrailer->move('upload/images', $fileTrailer->getClientOriginalName());
        $data['trailer'] = $fileTrailer->getClientOriginalName();
        $this->movieRepository->update($data, $currentMovie);
    }

    public function destroy($id) {
        $movie = $this->movieRepository->getById($id);
        $this->movieRepository->delete($movie);
    }

    public function findById($id) {
        return $this->movieRepository->getById($id);
    }

    public function getRecommendMovies()
    {
        $recommendMovies = $this->movieRepository->getRecommendMovies();
        return $recommendMovies;
    }

    public function getNewMovies()
    {
        $newMovies = $this->movieRepository->getNewMovies();
        return $newMovies;
    }

    public function searchMovie($request)
    {
        $keyWord = $request->key_word;
        $movies = $this->movieRepository->searchMovie($keyWord);
        return $movies;
    }
}

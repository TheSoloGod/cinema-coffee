<?php

namespace App\Http\Controllers;

use App\Services\AgencyService\AgencyServiceInterface;
use App\Services\ExtensionService\ExtensionService;
use App\Services\MovieCategoryService\MovieCategoryServiceInterface;
use App\Services\MovieService\MovieServiceInterface;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    protected $movieService;
    protected $movieCategoryService;
    protected $agencyService;
    protected $extensionService;

    public function __construct(MovieServiceInterface $movieService,
                                MovieCategoryServiceInterface $movieCategoryService,
                                AgencyServiceInterface $agencyService,
                                ExtensionService $extensionService)
    {
        $this->movieService = $movieService;
        $this->movieCategoryService = $movieCategoryService;
        $this->agencyService = $agencyService;
        $this->extensionService = $extensionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = $this->movieService->getAll();
        return view('back.movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movieCategories = $this->movieCategoryService->getAll();
        return view('back.movie.create', compact('movieCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->movieService->store($request->all());
        return redirect()->route('movies.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = $this->movieService->findById($id);
        $movieCategories = $this->movieCategoryService->getAll();
        return view('back.movie.edit', compact('movie', 'movieCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->movieService->update($request->all(), $id);
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->movieService->destroy($id);
        return redirect()->route('movies.index');
    }

    public function getMoviesHome()
    {
        $recommendMovies = $this->movieService->getRecommendMovies();
        $newMovies = $this->movieService->getNewMovies();
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.movie.movie-total', compact('recommendMovies', 'newMovies', 'agencies', 'extensions'));
    }

    public function getMovieById($id)
    {
        $movie = $this->movieService->findById($id);
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        $movieCategory = $this->movieCategoryService->findById($movie->movie_category_id)->name;
        $movieCategories = $this->movieCategoryService->getAll();
        return view('front.movie.movie-detail', compact('movie', 'movieCategory', 'movieCategories', 'agencies', 'extensions'));
    }

    public function searchMovie(Request $request)
    {
        $movies = $this->movieService->searchMovie($request);
        $keyWord = $request->key_word;
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        $movieCategories = $this->movieCategoryService->getAll();
        return view('front.movie.movie-search', compact('movies', 'movieCategories', 'keyWord', 'agencies', 'extensions'));
    }
}

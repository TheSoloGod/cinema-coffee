<?php

namespace App\Http\Controllers;

use App\Services\MovieCategoryService\MovieCategoryServiceInterface;
use App\Services\MovieService\MovieServiceInterface;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    protected $movieService;
    protected $movieCategoryService;

    public function __construct(MovieServiceInterface $movieService, MovieCategoryServiceInterface $movieCategoryService)
    {
        $this->movieService = $movieService;
        $this->movieCategoryService = $movieCategoryService;
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
        return view('front.movie.movie-total', compact('recommendMovies', 'newMovies'));
    }

    public function getMovieById($id)
    {
        $movie = $this->movieService->findById($id)   ;
        return view('front.movie.movie-detail', compact('movie'));
    }

    public function searchMovie(Request $request)
    {
        $movies = $this->movieService->searchMovie($request);
        return view('front.movie.movie-search', compact('movies'));
    }
}

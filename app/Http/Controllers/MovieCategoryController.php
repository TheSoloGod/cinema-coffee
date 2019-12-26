<?php

namespace App\Http\Controllers;

use App\Services\MovieCategoryService\MovieCategoryServiceInterface;
use Illuminate\Http\Request;

class MovieCategoryController extends Controller
{
    protected $movieCategoryService;

    public function __construct(MovieCategoryServiceInterface $movieCategoryService)
    {
        $this->movieCategoryService = $movieCategoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movieCategories = $this->movieCategoryService->getAll();
        return view('back.movie-category.index', compact('movieCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.movie-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->movieCategoryService->store($request->all());
        return redirect()->route('movie-categories.index');
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
        $movieCategory = $this->movieCategoryService->findById($id);
        return view('back.movie-category.edit', compact('movieCategory'));
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
        $this->movieCategoryService->update($request->all(), $id);
        return redirect()->route('movie-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->movieCategoryService->destroy($id);
        return redirect()->route('movie-categories.index');
    }
}

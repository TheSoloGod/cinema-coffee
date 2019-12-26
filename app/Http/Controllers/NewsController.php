<?php

namespace App\Http\Controllers;

use App\Services\NewsService\NewsServiceInterface;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsService;

    public function __construct(NewsServiceInterface $newsService)
    {
        $this->newsService = $newsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses = $this->newsService->getAll();
        return view('back.news.index', compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->newsService->store($request->all());
        return redirect()->route('newses.create');
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
        $news = $this->newsService->findById($id);
        return view('back.news.edit', compact('news'));
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
        $this->newsService->update($request->all(), $id);
        return redirect()->route('newses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->newsService->destroy($id);
        return redirect()->route('newses.index');
    }

    public function getAllNews()
    {
        $news = $this->newsService->getAll();
        return view('front.news.news-total', compact('news'));
    }

    public function getNewsById($id)
    {
        $news = $this->newsService->findById($id);
        return view('front.news.news-detail', compact('news'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\AgencyService\AgencyServiceInterface;
use App\Services\ExtensionService\ExtensionServiceInterface;
use App\Services\NewsService\NewsServiceInterface;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsService;
    protected $agencyService;
    protected $extensionService;

    public function __construct(NewsServiceInterface $newsService,
                                AgencyServiceInterface $agencyService,
                                ExtensionServiceInterface $extensionService)
    {
        $this->newsService = $newsService;
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
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.news.news-total', compact('news', 'agencies', 'extensions'));
    }

    public function getNewsById($id)
    {
        $news = $this->newsService->findById($id);
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.news.news-detail', compact('news', 'agencies', 'extensions'));
    }

    public function getNewestNews()
    {
        $newestNews = $this->newsService->getNewestNews();
        return $newestNews;
    }

    public function getPromoNews()
    {
        $promo = $this->newsService->getPromoNews();
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.news.promo', compact('promo', 'agencies', 'extensions'));
    }

    public function getHiringNews()
    {
        $hiring = $this->newsService->getHiringNews();
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.news.hiring', compact('hiring', 'agencies', 'extensions'));
    }
}

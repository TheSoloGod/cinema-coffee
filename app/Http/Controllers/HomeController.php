<?php

namespace App\Http\Controllers;

use App\Services\AgencyService\AgencyServiceInterface;
use App\Services\ExtensionService\ExtensionServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $agencyService;
    protected $extensionService;

    /**
     * Create a new controller instance.
     *
     */
    public function __construct(AgencyServiceInterface $agencyService,
                                ExtensionServiceInterface $extensionService)
    {
//        $this->middleware('auth');
        $this->agencyService = $agencyService;
        $this->extensionService = $extensionService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getHomePage()
    {
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();

        return view('front.home.home', compact('agencies', 'extensions'));
    }
}

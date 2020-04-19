<?php

namespace App\Http\Controllers;

use App\Services\AgencyService\AgencyServiceInterface;
use App\Services\ExtensionService\ExtensionService;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    protected $agencyService;
    protected $extensionService;

    public function __construct(AgencyServiceInterface $agencyService,
                                ExtensionService $extensionService)
    {
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
        $agencies = $this->agencyService->getAll();
        return view('back.agency.index', compact('agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.agency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->agencyService->store($request->all());
        return redirect()->route('agencies.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 1)
    {
        $agency = $this->agencyService->findById($id);
        return view('front.agency.agency-detail', compact('agency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency = $this->agencyService->findById($id);
        return view('back.agency.edit', compact('agency'));
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
        $this->agencyService->update($request->all(), $id);
        return redirect()->route('agencies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->agencyService->destroy($id);
        return redirect()->route('agencies.index');
    }

    public function getAllAgencies()
    {
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.agency.agency-total', compact('agencies', 'extensions'));
    }

    public function getAgencyDetailById($id)
    {
        $agency = $this->agencyService->findById($id);
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.agency.agency-detail', compact('agency', 'agencies', 'extensions'));
    }
}

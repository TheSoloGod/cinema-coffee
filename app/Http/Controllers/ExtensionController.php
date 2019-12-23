<?php

namespace App\Http\Controllers;

use App\Services\ExtensionService\ExtensionServiceInterface;
use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    protected $extensionService;

    public function __construct(ExtensionServiceInterface $extensionService)
    {
        $this->extensionService = $extensionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extensions = $this->extensionService->getAll();
        return view('back.extension.index', compact('extensions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.extension.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->extensionService->store($request->all());
        return redirect()->route('agencies.create');
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
        $extension = $this->extensionService->findById($id);
        return view('back.extension.edit', compact('extension'));
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
        $this->extensionService->update($request->all(), $id);
        return redirect()->route('extensions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->extensionService->destroy($id);
        return redirect()->route('extensions.index');
    }
}

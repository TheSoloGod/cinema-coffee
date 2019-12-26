<?php

namespace App\Http\Controllers;

use App\Services\RoomPriceService\RoomPriceServiceInterface;
use Illuminate\Http\Request;

class RoomPriceController extends Controller
{
    protected $roomPriceService;

    public function __construct(RoomPriceServiceInterface $roomPriceService)
    {
        $this->roomPriceService = $roomPriceService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomPrices = $this->roomPriceService->getAll();
        return view('back.room-price.index', compact('roomPrices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.room-price.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->roomPriceService->store($request->all());
        return redirect()->route('room-prices.create');
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
        $roomPrice = $this->roomPriceService->findById($id);
        return view('back.room-price.edit', compact('roomPrice'));
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
        $this->roomPriceService->update($request->all(), $id);
        return redirect()->route('room-prices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->roomPriceService->destroy($id);
        return redirect()->route('room-prices.index');
    }

    public function getAllMenus()
    {
        $menus = $this->roomPriceService->getAll();
        return view('front.room-price.room-price-total', compact('menus'));
    }
}

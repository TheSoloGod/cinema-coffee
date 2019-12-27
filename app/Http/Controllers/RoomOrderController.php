<?php

namespace App\Http\Controllers;

use App\Services\AgencyService\AgencyServiceInterface;
use App\Services\ExtensionService\ExtensionService;
use App\Services\ExtensionService\ExtensionServiceInterface;
use App\Services\RoomOrderService\RoomOrderServiceInterface;
use Illuminate\Http\Request;

class RoomOrderController extends Controller
{
    protected $roomOrderService;
    protected $agencyService;
    protected $extensionService;

    public function __construct(RoomOrderServiceInterface $roomOrderService,
                                AgencyServiceInterface $agencyService,
                                ExtensionServiceInterface $extensionService)
    {
        $this->roomOrderService = $roomOrderService;
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
        $roomOrders = $this->roomOrderService->getAll();
        return view('back.room-order.index', compact('roomOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.room-order.room-order', compact('agencies', 'extensions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->roomOrderService->store($request->all());
        return redirect()->route('room.order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roomOrder = $this->roomOrderService->findById($id);
        return view('back.room-order.show', compact('roomOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->roomOrderService->destroy($id);
        return redirect()->route('room-orders.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\RoomOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RoomOrderFormRequest;
use App\Services\ExtensionService\ExtensionService;
use App\Services\AgencyService\AgencyServiceInterface;
use App\Services\ExtensionService\ExtensionServiceInterface;
use App\Services\RoomOrderService\RoomOrderServiceInterface;

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
        $roomOrders = $this->roomOrderService->getAll()->sortByDesc('created_at');
        return view('back.room-order.index', compact('roomOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.room-order.room-order', compact('agencies', 'extensions'));
    }

    /**
     * @param $agencyId
     * @return Response
     */
    public function getTimeHistory(Request $request)
    {
        $today = date('Y-m-d', time());
        $timeHistory = DB::table('room_orders')
                ->select('time', DB::raw('COUNT(*) as number_record'))
                ->where('agency_id', $request->agencyId)
                ->where('status_id', 2)
                ->where('created_at','LIKE', '%' . $today . '%')
                ->groupBy('time')
                ->havingRaw('number_record = 3')
                ->get();
        return response()->json($timeHistory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomOrderFormRequest $request)
    {
        $this->roomOrderService->store($request->all());
        return redirect()->route('room.order')->with('success', 'Đặt phòng thành công.');
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
        $this->roomOrderService->update($request->all(), $id);
        return redirect()->route('room-orders.index');
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

    public function showHistory($userId) {
        $roomOrders = RoomOrder::where('user_id', $userId)->orderBy('created_at', 'Desc')->get();
        $agencies = $this->agencyService->getAll();
        $extensions = $this->extensionService->getAll();
        return view('front.room-order.history', compact('roomOrders', 'agencies', 'extensions'));
    }
}

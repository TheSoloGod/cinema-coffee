<?php


namespace App\Services\RoomOrderService;


use Illuminate\Support\Facades\Auth;
use App\Repositories\RoomOrderRepository\RoomOrderRepositoryInterface;

class RoomOrderService implements RoomOrderServiceInterface
{
    protected $roomOrderRepository;

    public function __construct(RoomOrderRepositoryInterface $roomOrderRepository)
    {
        $this->roomOrderRepository = $roomOrderRepository;
    }

    public function getAll() {
        return $this->roomOrderRepository->getAll();
    }

    public function store($data) {
        $user_id = Auth::user()->id;
        $data['user_id'] = $user_id;
        $this->roomOrderRepository->create($data);
    }

    public function update($data, $id) {
        $currentRoomOrder = $this->roomOrderRepository->getById($id);
        $this->roomOrderRepository->update($data, $currentRoomOrder);
    }

    public function destroy($id) {
        $roomOrder = $this->roomOrderRepository->getById($id);
        $this->roomOrderRepository->delete($roomOrder);
    }

    public function findById($id) {
        return $this->roomOrderRepository->getById($id);
    }
}

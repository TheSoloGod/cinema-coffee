<?php


namespace App\Services\RoomOrderService;


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
        $this->roomOrderRepository->create($data);
    }

    public function destroy($id) {
        $roomOrder = $this->roomOrderRepository->getById($id);
        $this->roomOrderRepository->delete($roomOrder);
    }

    public function findById($id) {
        return $this->roomOrderRepository->getById($id);
    }
}

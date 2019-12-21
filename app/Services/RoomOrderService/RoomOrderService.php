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
}

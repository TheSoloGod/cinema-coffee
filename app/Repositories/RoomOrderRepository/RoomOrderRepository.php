<?php


namespace App\Repositories\RoomOrderRepository;


use App\Repositories\EloquentRepository\EloquentRepository;
use App\RoomOrder;

class RoomOrderRepository extends EloquentRepository implements RoomOrderRepositoryInterface
{
    public function getModel()
    {
        return RoomOrder::class;
    }
}

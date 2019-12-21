<?php


namespace App\Repositories\RoomPriceRepository;


use App\Repositories\EloquentRepository\EloquentRepository;
use App\RoomPrice;

class RoomPriceRepository extends EloquentRepository implements RoomPriceRepositoryInterface
{
    public function getModel()
    {
        return RoomPrice::class;
    }
}

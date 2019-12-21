<?php


namespace App\Services\RoomPriceService;


use App\Repositories\RoomPriceRepository\RoomPriceRepositoryInterface;

class RoomPriceService implements RoomPriceServiceInterface
{
    protected $roomPriceRepository;

    public function __construct(RoomPriceRepositoryInterface $roomPriceRepository)
    {
        $this->roomPriceRepository = $roomPriceRepository;
    }
}

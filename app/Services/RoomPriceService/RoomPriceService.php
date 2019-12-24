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

    public function getAll() {
        return $this->roomPriceRepository->getAll();
    }

    public function store($data) {
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->roomPriceRepository->create($data);
    }

    public function update($data, $id) {
        $currentRoomPrice = $this->roomPriceRepository->getById($id);
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->roomPriceRepository->update($data, $currentRoomPrice);
    }

    public function destroy($id) {
        $roomPrice = $this->roomPriceRepository->getById($id);
        $this->roomPriceRepository->delete($roomPrice);
    }

    public function findById($id) {
        return $this->roomPriceRepository->getById($id);
    }
}

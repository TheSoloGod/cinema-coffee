<?php


namespace App\Services\AgencyService;


use App\Repositories\AgencyRepository\AgencyRepositoryInterface;

class AgencyService implements AgencyServiceInterface
{
    protected $agencyRepository;

    public function __construct(AgencyRepositoryInterface $agencyRepository)
    {
        $this->agencyRepository = $agencyRepository;
    }

    public function getAll() {
        return $this->agencyRepository->getAll();
    }

    public function store($data) {
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->agencyRepository->create($data);
    }

    public function update($data, $id) {
        $currentAgency = $this->agencyRepository->getById($id);
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->agencyRepository->update($data, $currentAgency);
    }

    public function destroy($id) {
        $agency = $this->agencyRepository->getById($id);
        $this->agencyRepository->delete($agency);
    }

    public function findById($id) {
        return $this->agencyRepository->getById($id);
    }
}

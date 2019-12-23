<?php


namespace App\Services\ExtensionService;


use App\Repositories\ExtensionRepository\ExtensionRepositoryInterface;

class ExtensionService implements ExtensionServiceInterface
{
    protected $extensionRepository;

    public function __construct(ExtensionRepositoryInterface $extensionRepository)
    {
        $this->extensionRepository = $extensionRepository;
    }

    public function getAll() {
        return $this->extensionRepository->getAll();
    }

    public function store($data) {
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->extensionRepository->create($data);
    }

    public function update($data, $id) {
        $currentExtension = $this->extensionRepository->getById($id);
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->extensionRepository->update($data, $currentExtension);
    }

    public function destroy($id) {
        $extension = $this->extensionRepository->getById($id);
        $this->extensionRepository->delete($extension);
    }

    public function findById($id) {
        return $this->extensionRepository->getById($id);
    }
}

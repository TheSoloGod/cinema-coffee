<?php


namespace App\Services\MenuService;


use App\Repositories\MenuRepository\MenuRepositoryInterface;

class MenuService implements MenuServiceInterface
{
    protected $menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    public function getAll() {
        return $this->menuRepository->getAll();
    }

    public function store($data) {
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->menuRepository->create($data);
    }

    public function update($data, $id) {
        $currentMenu = $this->menuRepository->getById($id);
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->menuRepository->update($data, $currentMenu);
    }

    public function destroy($id) {
        $menu = $this->menuRepository->getById($id);
        $this->menuRepository->delete($menu);
    }

    public function findById($id) {
        return $this->menuRepository->getById($id);
    }
}

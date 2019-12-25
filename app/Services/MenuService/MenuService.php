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
}

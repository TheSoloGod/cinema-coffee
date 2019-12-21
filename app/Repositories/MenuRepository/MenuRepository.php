<?php


namespace App\Repositories\MenuRepository;


use App\Menu;
use App\Repositories\EloquentRepository\EloquentRepository;

class MenuRepository extends EloquentRepository implements MenuRepositoryInterface
{
    public function getModel()
    {
        return Menu::class;
    }
}

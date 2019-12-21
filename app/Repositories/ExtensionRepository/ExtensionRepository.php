<?php


namespace App\Repositories\ExtensionRepository;


use App\Extension;
use App\Repositories\EloquentRepository\EloquentRepository;

class ExtensionRepository extends EloquentRepository implements ExtensionRepositoryInterface
{
    public function getModel()
    {
        return Extension::class;
    }
}

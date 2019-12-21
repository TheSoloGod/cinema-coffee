<?php


namespace App\Repositories\AgencyRepository;


use App\Agency;
use App\Repositories\EloquentRepository\EloquentRepository;

class AgencyRepository extends EloquentRepository implements AgencyRepositoryInterface
{
    public function getModel()
    {
        return Agency::class;
    }
}

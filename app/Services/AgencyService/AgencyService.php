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
}

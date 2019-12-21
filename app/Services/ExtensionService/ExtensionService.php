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
}

<?php


namespace App\Repositories\UserRepository;


use App\Repositories\EloquentRepository\EloquentRepository;
use App\User;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }
}

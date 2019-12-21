<?php


namespace App\Repositories\EloquentRepository;


interface EloquentRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function paginate($number);
    public function create(array $data);
    public function update(array $data, $object);
    public function delete($object);
}

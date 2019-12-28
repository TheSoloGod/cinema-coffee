<?php


namespace App\Services\UserService;


use App\Repositories\UserRepository\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAll() {
        return $this->userRepository->getAll();
    }

    public function store($data) {
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->userRepository->create($data);
    }

    public function update($data, $id) {
        $currentUser = $this->userRepository->getById($id);
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->userRepository->update($data, $currentUser);
    }

    public function destroy($id) {
        $user = $this->userRepository->getById($id);
        $this->userRepository->delete($user);
    }

    public function findById($id) {
        return $this->userRepository->getById($id);
    }
}

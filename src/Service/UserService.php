<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;

/**
 * Class ChantierService
 * @package App\Service
 */
class UserService
{

    /**
     * @var UserRepository $userRepository
     */
    private readonly UserRepository $userRepository;

    /**
     * @var RandomService $randomService
     */
    private readonly RandomService $randomService;

    public function __construct(UserRepository $userRepository, RandomService $randomService)
    {
        $this->userRepository = $userRepository;
        $this->randomService = $randomService;
    }

    /**
     * @return User[]
     */
    public function getAllUser(): array
    {
        return $this->userRepository->findAll();
    }

    /**
     * @return User
     */
    public function getUserByMatricule(int $userMatricule): User
    {
        $user = $this->userRepository->find($userMatricule);
        if ($user === null) {
            throw new \Exception("Matricule inconnu");
        }
        return $user;
    }
}

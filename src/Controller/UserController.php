<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Service\UserService;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController
{

    #[Route('/api/user/:matricule', name: 'app_user_get', methods: ['GET'])]
    public function getUser(SerializerInterface $serializer, UserRepository $userRepository, string $matricule): Response
    {
        $user = $userRepository->find($matricule);
        return new Response($serializer->serialize($user, 'json'));
    }

    #[Route('/api/user', name: 'app_user_all_get', methods: ['GET'])]
    public function getAllUser(SerializerInterface $serializer, UserService $userService): Response
    {
        return new Response($serializer->serialize($userService->getAllUser(), 'json'));
    }
}

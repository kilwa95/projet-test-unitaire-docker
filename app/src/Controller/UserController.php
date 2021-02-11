<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use App\Service\UserService;



class UserController extends AbstractController
{
    /**
     * @Rest\Get("/users")
     */

    public function GetUsers(UserRepository $userRepository,UserService $userService): JsonResponse
    {
        $users = $userRepository->findAll();
        $usersJson = $userService->serializeUsers($users);
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(200);
        $response->setData($usersJson);
        return $response;
    }
}

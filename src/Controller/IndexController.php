<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/profile', name: 'profile', methods: ['GET', 'DELETE'])]
    public function profile(Request $request): Response
    {
        if($request->getMethod() !== 'DELETE') {
            return $this->render('profile/profile.html.twig', [
                'method' => $request->getMethod()
            ]);
        }
        return JsonResponse::fromJsonString("{'message': 'user delete'}");

    }
}
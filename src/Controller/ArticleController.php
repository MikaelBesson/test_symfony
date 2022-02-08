<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;




#[Route('/articles')]
class ArticleController extends AbstractController
{

    #[Route('/', name: 'articles_list')]
    public function list(): Response
    {
        return new Response( "<h1>Liste des articles</h1>");
    }

    #[Route('/show/{articleId}', name: 'article_show')]
    public function show(int $articleId): Response
    {
        return new Response("<h1>Affichage de l'article $articleId</h1>");
    }

    #[Route("/edit/{id}", name: 'article_edit')]
    public function edit(int $id) : Response
    {
        return new Response("<h1>Edition de l'article $id</h1>");
    }

    #[Route('/delete/{id}', name: 'article_delete')]
    public function delete(int $id) : Response
    {
        return new Response("<h1>Article $id supprimé avec succès</h1>");
    }
}
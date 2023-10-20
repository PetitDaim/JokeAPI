<?php

namespace App\Controller;

use App\HttpClient\JokeHttpClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(JokeHttpClient $httpClient): Response
    {
        $jokes = $httpClient->getSomeJokes( 4 );
        $joke = $httpClient->getRandomJoke();
        return $this->render('home/index.html.twig', [
            'title' => 'Une blague aléatoire',
            'jokes' => $jokes,
            'joke' => $joke,
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FortuneController extends AbstractController
{
    #[Route('/fortune', name: 'app_fortune')]
    public function index(): Response
    {
        return $this->render('fortune/index.html.twig', [
            'first_name' => 'Vandana',
        ]);
    }

    #[Route('/colour', name: 'app_colour')]
    public function colour(): Response
    {
        return $this->render('fortune/colour.html.twig', []);
    }

    //lucky number
    #[Route('/lucky/number/{max}', name: 'app_lucky_number')]
    public function number(int $max): Response
    {
        $number = random_int(0, $max);
        // dd($number);
        return $this->render('fortune/random.html.twig', [
            'random_number' => $number

        ]);
    }
}

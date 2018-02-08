<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SunshineController extends Controller
{
    /**
     * @Route("/miami/{neighborhood}")
     */
    public function miami($neighborhood, LoggerInterface $logger)
    {
        $neighborhood = ucwords(str_replace('-', ' ', $neighborhood));

//        return $this->json([
//            'highlights' => ['beaches', 'Cuban food', 'no snow', 'Adam Culp']
//        ]);

        $logger->info('Talking about the neighborhood: '.$neighborhood);

        return $this->render('sunshine/miami.html.twig', [
            'neighborhood' => $neighborhood,
            'highlights' => ['beaches', 'Cuban food', 'no snow', 'Adam Culp']
        ]);
    }
}

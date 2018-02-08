<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SunshineController extends Controller
{
    /**
     * @Route("/miami")
     */
    public function miami()
    {
        return $this->json([
            'highlights' => ['beaches', 'Cuban food', 'no snow', 'Adam Culp']
        ]);
    }
}

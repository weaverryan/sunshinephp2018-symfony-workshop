<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SunshineController extends Controller
{
    /**
     * @Route("/miami/{neighborhood}")
     */
    public function miami($neighborhood)
    {
        $neighborhood = ucwords(str_replace('-', ' ', $neighborhood));

        return $this->json([
            'neighborhood' => $neighborhood,
            'highlights' => ['beaches', 'Cuban food', 'no snow', 'Adam Culp']
        ]);
    }
}

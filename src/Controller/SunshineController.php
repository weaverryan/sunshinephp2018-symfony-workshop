<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SunshineController extends Controller
{
    public function miami()
    {
        return $this->json([
            'highlights' => ['beaches', 'Cuban food', 'no snow', 'Adam Culp']
        ]);
    }
}

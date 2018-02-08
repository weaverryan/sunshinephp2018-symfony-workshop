<?php

namespace App\Controller;

use App\Entity\MiamiHighlight;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SunshineController extends Controller
{
    /**
     * @Route("/load-data")
     */
    public function loadData(EntityManagerInterface $em)
    {
        $highlight1 = new MiamiHighlight();
        $highlight1->setName('beaches');
        $highlight1->setDescription('A bit warmer than in Michigan currently');

        $highlight2 = new MiamiHighlight();
        $highlight2->setName('Cuban Food');
        $highlight2->setDescription('Ah... Cuban Sandwich...');

        $highlight2 = new MiamiHighlight();
        $highlight2->setName('Cuban Food');
        $highlight2->setDescription('Ah... Cuban Sandwich...');

        $highlight3 = new MiamiHighlight();
        $highlight3->setName('no snow');
        $highlight3->setDescription('Because we\'re buried up north');

        $highlight4 = new MiamiHighlight();
        $highlight4->setName('Adam Culp');
        $highlight4->setDescription('Such a great dude!');

        $em->persist($highlight1);
        $em->persist($highlight2);
        $em->persist($highlight3);
        $em->persist($highlight4);
        $em->flush();

        return new Response('Go get some Cuban food!');
    }

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

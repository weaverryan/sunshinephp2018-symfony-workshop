<?php

namespace App\Repository;

use App\Entity\MiamiHighlight;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class MiamiHighlightRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MiamiHighlight::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('m')
            ->where('m.something = :value')->setParameter('value', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\Coachings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Coachings|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coachings|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coachings[]    findAll()
 * @method Coachings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoachingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coachings::class);
    }

    // /**
    //  * @return Coachings[] Returns an array of Coachings objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Coachings
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

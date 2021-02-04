<?php

namespace App\Repository;

use App\Entity\PrixMoyen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PrixMoyen|null find($id, $lockMode = null, $lockVersion = null)
 * @method PrixMoyen|null findOneBy(array $criteria, array $orderBy = null)
 * @method PrixMoyen[]    findAll()
 * @method PrixMoyen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrixMoyenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PrixMoyen::class);
    }

    // /**
    //  * @return PrixMoyen[] Returns an array of PrixMoyen objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PrixMoyen
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

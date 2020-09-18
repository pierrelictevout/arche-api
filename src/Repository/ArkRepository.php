<?php

namespace App\Repository;

use App\Entity\Ark;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ark|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ark|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ark[]    findAll()
 * @method Ark[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ark::class);
    }

    // /**
    //  * @return Ark[] Returns an array of Ark objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ark
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

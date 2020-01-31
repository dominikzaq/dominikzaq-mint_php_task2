<?php

namespace App\Repository;

use App\Entity\AccountDisabled;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccountDisabled|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountDisabled|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountDisabled[]    findAll()
 * @method AccountDisabled[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountDisabledRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccountDisabled::class);
    }

    // /**
    //  * @return AccountDisabled[] Returns an array of AccountDisabled objects
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
    public function findOneBySomeField($value): ?AccountDisabled
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

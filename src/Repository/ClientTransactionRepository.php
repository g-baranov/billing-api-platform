<?php

namespace App\Repository;

use App\Entity\ClientTransaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientTransaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientTransaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientTransaction[]    findAll()
 * @method ClientTransaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientTransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientTransaction::class);
    }

    // /**
    //  * @return ClientTransaction[] Returns an array of ClientTransaction objects
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
    public function findOneBySomeField($value): ?ClientTransaction
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

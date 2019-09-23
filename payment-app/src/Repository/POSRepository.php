<?php

namespace App\Repository;

use App\Entity\POS;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method POS|null find($id, $lockMode = null, $lockVersion = null)
 * @method POS|null findOneBy(array $criteria, array $orderBy = null)
 * @method POS[]    findAll()
 * @method POS[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class POSRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, POS::class);
    }

    // /**
    //  * @return POS[] Returns an array of POS objects
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
    public function findOneBySomeField($value): ?POS
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

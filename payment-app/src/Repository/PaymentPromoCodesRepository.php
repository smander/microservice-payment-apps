<?php

namespace App\Repository;

use App\Entity\PaymentPromoCodes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PaymentPromoCodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentPromoCodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentPromoCodes[]    findAll()
 * @method PaymentPromoCodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentPromoCodesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PaymentPromoCodes::class);
    }

    public function findByCode($value): ?PaymentPromoCodes
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.code = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}

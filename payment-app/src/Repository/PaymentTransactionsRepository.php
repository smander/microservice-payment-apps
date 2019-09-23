<?php

namespace App\Repository;

use App\Entity\PaymentTransactions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PaymentTransactions|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentTransactions|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentTransactions[]    findAll()
 * @method PaymentTransactions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentTransactionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PaymentTransactions::class);
    }

    /**
     * Saves task to database.
     *
     * @param |object $transaction
     * @return PaymentTransactions
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(PaymentTransactions $transaction)
    {
        $this->_em->persist($transaction);
        $this->_em->flush();
        return $transaction;
    }
}

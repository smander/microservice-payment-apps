<?php

namespace App\Service;

use App\Entity\PaymentTransactions;
use App\Enum\Enum;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;

class UserService{

    private $entityManager;
    private $userRepository;


    /**
     * UserService constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param UserRepository $userRepository
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        UserRepository $userRepository
    ) {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;

    }

    /**
     * @return User|UserInterface
     */
    public function getCurrentUser() {
        return $this->security->getUser();
    }

    /**
     * @return User|object|UserInterface
     */
    public function getUserById(int $user_id) {
        return $this->userRepository->find($user_id);
    }

}

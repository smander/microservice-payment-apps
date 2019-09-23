<?php

namespace App\Dto\Response;

use App\Entity\User;
use App\Repository\UserRepository;

class UserResponse
{

    private $id;
    private $deposited_amount;
    private $multiply_amount;
    private $promotion_amount;

    /**
     * UserResponse constructor.
     */
    public function __construct()
    {
    }

    public static function fromUser(User $user)
    {
        $userResponse = new UserResponse();
        $userResponse->setId($user->getId());
        $userResponse->setDepositAmount($user->getDepositAmount());
        $userResponse->setMultiplyAmount($user->getMultiplyAmount());
        $userResponse->setPromotionAmount($user->getPromotionAmount());
        return $userResponse;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $amount
     */
    public function setDepositAmount($amount)
    {
        $this->deposited_amount = $amount;
    }

    /**
     * @param mixed $amount
     */
    public function setMultiplyAmount($amount): void
    {
        $this->multiply_amount = $amount;
    }


    /**
     * @param mixed $amount
     */
    public function setPromotionAmount($amount): void
    {
        $this->promotion_amount = $amount;
    }

}

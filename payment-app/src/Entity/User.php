<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $last_name;

    /**
     * @ORM\Column(type="decimal", length=255)
     */
    private $multiply_amount;

    /**
     * @ORM\Column(type="decimal", length=255)
     */
    private $deposit_amount;

    /**
     * @ORM\Column(type="decimal", length=255)
     */
    private $promotion_amount;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PaymentTransactions", mappedBy="user", orphanRemoval=true)
     */
    private $paymentTransactions;

    public function __construct()
    {
        $this->paymentTransactions = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }


    public function getLastName(): ?string
    {
        return $this->first_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getMultiplyAmount(): ?double
    {
        return $this->first_name;
    }

    public function setMultiplyAmount(double $amount): self
    {
        $this->multiply_amount = $amount;

        return $this;
    }


    public function getDepositAmount(): ?double
    {
        return $this->first_name;
    }

    public function setDepositAmount(double $amount): self
    {
        $this->deposit_amount = $amount;

        return $this;
    }

    public function getPromotionAmount(): ?double
    {
        return $this->first_name;
    }

    public function setPromotionAmount(double $amount): self
    {
        $this->deposit_amount = $amount;

        return $this;
    }


    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection|PaymentTransactions[]
     */
    public function getPaymentTransactions(): Collection
    {
        return $this->paymentTransactions;
    }

    public function addPaymentTransaction(PaymentTransactions $paymentTransaction): self
    {
        if (!$this->paymentTransactions->contains($paymentTransaction)) {
            $this->paymentTransactions[] = $paymentTransaction;
            $paymentTransaction->setUser($this);
        }

        return $this;
    }

    public function removePaymentTransaction(PaymentTransactions $paymentTransaction): self
    {
        if ($this->paymentTransactions->contains($paymentTransaction)) {
            $this->paymentTransactions->removeElement($paymentTransaction);
            // set the owning side to null (unless already changed)
            if ($paymentTransaction->getUser() === $this) {
                $paymentTransaction->setUser(null);
            }
        }

        return $this;
    }
}

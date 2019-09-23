<?php

namespace App\Dto\Request;

use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class DepositRequest
{
    /**
     * @Assert\NotBlank()
     */
    private $token_id;

    /**
     * @Assert\NotBlank()
     */
    private $value;


    /**
     * @Assert\NotBlank()
     */
    private $currency;


    public function __construct(RequestStack $request)
    {
        $this->token_id = $request->getCurrentRequest()->get('token_id');
        $this->value = $request->getCurrentRequest()->get('value');
        $this->currency = $request->getCurrentRequest()->get('currency');

        // or if this is JSON request
        // $data = json_decode($request->getContent(), true);
        // $this->email = $data['email'] ?? '';
    }

    public function getTokenid(): string
    {
        return $this->token_id;
    }

    public function getValue(): double
    {
        return $this->value;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

}
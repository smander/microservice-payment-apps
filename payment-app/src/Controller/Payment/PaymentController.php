<?php
namespace App\Controller\Payment;

use App\Dto\Request\DepositRequest;
use App\Dto\Request\PromotionRequest;
use App\Entity\PaymentTransactions;
use App\Enum\Enum;
use App\Repository\PaymentPromoCodesRepository;
use App\Repository\PaymentTransactionsRepository;
use App\Service\PaymentService;
use Doctrine\ORM\Query\AST\Functions\CurrentDateFunction;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use App\Service\UserService;

class PaymentController extends AbstractFOSRestController
{

    private $paymentTransactionsRepository;
    private $paymentService;
    private $userService;

    public function __construct(PaymentTransactionsRepository $paymentTransactionsRepository,PaymentService $paymentService,UserService $userService)
    {
        $this->paymentTransactionsRepository    =   $paymentTransactionsRepository;
        $this->paymentService    =   $paymentService;
        $this->userService    =   $userService;
    }

    /**
     * @Rest\Post("/payment", name="payment_name")
     */
    public function Payment(DepositRequest $request)
    {
        try {

                //Check if payment true
                if($this->paymentService->request($request->getTokenid())){

                    return new JsonResponse(Enum::PAYMENT_CONFIRMED_STATUS,200);

                }
                else{
                    return new JsonResponse(Enum::PAYMENT_DECLINED_STATUS, 403);
                }


        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), 400);
        }

    }



}

<?php
namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Dto\Response\UserResponse;

class UsersController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/user", name="user")
     */
    public function getAction()
    {
        try {
            $user = $this->getUser();

            if($user)
            {
                //Set Amount, Multiply, Promotion as different
                $user_response = UserResponse::fromUser($user);

                return new JsonResponse($user_response);

            }

            else{
                return new JsonResponse('Unath', 401);
            }

        } catch (\Exception $e) {
            return new JsonResponse($e->getMessage(), 400);
        }
    }




}

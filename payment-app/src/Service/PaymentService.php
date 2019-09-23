<?php

namespace App\Service;

use App\Entity\User;

class PaymentService{


    public function __construct()
    {
        /// Some Inheritance with payment provider - setup Keys and etc
    }

    public function Request(){
        if($this->check()){
            return true;
        }
        return false;
    }


    private function check(){
        return (bool)random_int(0, 1);

    }


}

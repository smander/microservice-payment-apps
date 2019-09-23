<?php

namespace App\Enum;

class Enum
{

    const PAYMENT_TYPE_DEPOSIT = 'deposit';
    const PAYMENT_TYPE_PROMOTION = 'promotion';
    const PAYMENT_TYPE_WITHDRAW = 'withdraw';
    const PAYMENT_TYPE_PAYMENT = 'payment';


    const MAXIMUM_DEPOSITED_AMOUNT = 500;
    const MAXIMUM_DAILY_DEPOSITED_AMOUNT = 100;

    const PAYMENT_CONFIRMED_STATUS  =   'confirmed';
    const PAYMENT_DECLINED_STATUS   =   'declined';
}

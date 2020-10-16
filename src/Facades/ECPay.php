<?php

namespace Travis0125\ECPay\Facades;

use Illuminate\Support\Facades\Facade;

class ECPay extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ecpay';
    }
}
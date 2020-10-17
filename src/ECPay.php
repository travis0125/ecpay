<?php

namespace Travis0125\ECPay;

class ECPay
{
    private $instance = null;

    public function __construct()
    {
        $this->instance = new ECPayFactory();
        config('app.env') == 'production' ? $this->setForOnline() : $this->setForTest();
    }

    public function instance()
    {
        return $this->instance;
    }

    public function i()
    {
        return $this->instance;
    }

    private function setForTest()
    {
        $this->instance->ServiceURL  = 'https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5';
        $this->instance->MerchantID  = '2000132';
        $this->instance->HashKey     = '5294y06JbISpM5x9';
        $this->instance->HashIV      = 'v77hoKGq4kWxNNIS';
        $this->instance->EncryptType = 1;
    }

    private function setForOnline()
    {
        $this->instance->ServiceURL  = config('ecpay.ServiceURL');
        $this->instance->MerchantID  = config('ecpay.MerchantID');
        $this->instance->HashKey     = config('ecpay.HashKey');
        $this->instance->HashIV      = config('ecpay.HashIV');
        $this->instance->EncryptType = config('ecpay.EncryptType');
    }
}

<?php

return [
    'ServiceURL' => env('ECPAY_SERVICE_URL', ''),
    'MerchantID' => env('ECPAY_MERCHANT_ID', ''),
    'HashKey' => env('ECPAY_HASH_KEY', ''),
    'HashIV' => env('ECPAY_HASH_IV', ''),
    'EncryptType' => env('ECPAY_ENCRYPT_TYPE', ''),
];

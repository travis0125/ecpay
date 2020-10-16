<?php

namespace Travis0125\ECPay;

class ECPayFactory extends \ECPay_AllInOne
{
    //產生訂單html code
    public function CheckOutString($paymentButton = null, $target = "_self")
    {
        $arParameters = array_merge(['MerchantID' => $this->MerchantID, 'EncryptType' => $this->EncryptType], $this->Send);

        return ECPaySend::CheckOutString($paymentButton, $target = "_self", $arParameters, $this->SendExtend, $this->HashKey, $this->HashIV, $this->ServiceURL);
    }

    //取得付款結果通知的方法
    public function CheckOutFeedback($ecpayPost = null)
    {
        $ecpayPost = $ecpayPost ? $ecpayPost : $_POST;

        return ECPay_CheckOutFeedback::CheckOut(array_merge($ecpayPost, ['EncryptType' => $this->EncryptType]));
    }
}

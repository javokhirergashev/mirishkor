<?php

namespace frontend\widgets;

use uzdevid\payme\merchant\CheckoutUrl;
use yii\bootstrap5\Widget;

class Price extends Widget
{
    public function run()
    {
        $merchant_id = $_ENV['PAYME_MERCHANT_ID'];

        $account = [
            'order_id' => 1,
        ];

        $amount = 100000; //tiyin

        $params = [
            'l' => 'uz',
            'c' => 'https://example.com/checkout/success',
            'ct' => 15000,
            'cr' => 'uzs'
        ];

        $checkout_url = CheckoutUrl::generate($merchant_id, $account, $amount, $params);
        $models = \common\models\Service::find()->where(["status" => 1])->all();
        return $this->render('price', compact('models', 'checkout_url'));
    }
}
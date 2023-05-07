<?php

namespace frontend\widgets;

use yii\bootstrap5\Widget;

class Service extends Widget
{
    public function run()
    {
        $models = \common\models\Service::find()->where(["status" =>1, "service_category" => 1])->all();
        return $this->render('service',compact('models'));
    }
}
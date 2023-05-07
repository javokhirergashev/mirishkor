<?php

namespace frontend\controllers;

use common\models\Service;
use yii\web\Controller;

class ServiceController extends Controller
{
    public function actionView()
    {
        $models = \common\models\Service::find()->where(["status" =>1])->all();
        return $this->render('view', compact('models'));

    }
}
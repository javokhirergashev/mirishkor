<?php

namespace frontend\controllers;

use yii\web\Controller;

class AboutController extends Controller
{
    public function actionView()
    {
        return $this->render('view');
    }
}
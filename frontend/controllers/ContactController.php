<?php

namespace frontend\controllers;

use common\models\Contacts;
use yii\web\Controller;

class ContactController extends Controller
{
    public function actionView()
    {
        $contacts = Contacts::find()->all();
        return $this->render('view', compact('contacts'));
    }
}
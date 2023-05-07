<?php

namespace frontend\controllers;

use yii\web\Controller;

class VacancyController extends Controller
{
    public function actionView()
    {
        $models = \common\models\Vacancy::find()->where(["status" =>1])->all();
        return $this->render('view', compact('models'));

    }
}
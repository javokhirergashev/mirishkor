<?php

namespace frontend\controllers;

use yii\web\Controller;

class NewsController extends Controller
{
    public function actionView()
    {
        $models = \common\models\News::find()->where(['status' =>1])->orderBy(["id"=>SORT_DESC])->all();
        return $this->render('view',compact('models'));
    }
}
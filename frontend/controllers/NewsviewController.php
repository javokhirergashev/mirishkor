<?php

namespace frontend\controllers;

use common\models\News;
use common\models\StaticFunctions;
use yii\web\Controller;

class NewsviewController extends Controller
{
    public function actionView($id)
    {
        $model = News::findOne($id);
//        var_dump($model);
        if (empty($model)){
            return $this->goBack();
        }else{
            $image = StaticFunctions::getImage('news',$model->id,$model->image);
            return $this->render('view',compact('model','image'));
        }
    }
}
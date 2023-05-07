<?php

namespace frontend\widgets;

use yii\bootstrap5\Widget;

class News extends Widget
{
    public function run()
    {
        $models = \common\models\News::find()->where(['status' =>1])->orderBy(["id"=>SORT_DESC])->all();
        return $this->render('news',compact('models'));
    }
}
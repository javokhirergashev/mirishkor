<?php

namespace frontend\widgets;


use common\models\User;
use yii\base\Widget;

class Team extends Widget
{
    public function run()
    {
        $models = User::find()->where(['position_id' => 5])->all();
        return $this->render('team',compact('models'));
    }
}
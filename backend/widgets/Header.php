<?php

namespace app\widgets;

use common\models\User;
use yii\bootstrap5\Widget;

class Header extends Widget
{
    public function run()
    {
        $currentUser = User::findOne(\Yii::$app->user->getId());
        return $this->render('header', compact('currentUser'));
    }
}
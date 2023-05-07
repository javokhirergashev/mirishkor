<?php

namespace frontend\widgets;

use common\models\Contacts;
use common\models\Menu;
use yii\bootstrap5\Widget;

class Header extends Widget
{
    public function run()
    {
        $contacts = Contacts::find()->all();
        $models = Menu::find()->orderBy(["order_by"=> SORT_ASC])->all();
//        var_dump($contact); die();
        return $this->render('header', compact('models', 'contacts'));
    }
}
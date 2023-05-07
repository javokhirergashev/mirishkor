<?php

namespace frontend\widgets;

use yii\bootstrap5\Widget;

class Contact extends Widget
{
    public function run()
    {
        return $this->render('contact');
    }
}
<?php

namespace frontend\widgets;

use yii\bootstrap5\Widget;

class Faq extends Widget
{
    public function run()
    {
        return $this->render('faq');
    }
}
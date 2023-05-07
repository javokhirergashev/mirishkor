<?php

namespace frontend\widgets;

use yii\bootstrap5\Widget;

class Solution extends Widget
{
    public function run()
    {
        return $this->render('solution');
    }
}
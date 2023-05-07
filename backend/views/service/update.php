<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Service $model */
/** @var common\models\Service $nameValues */
/** @var common\models\Service $descriptionValues */

$this->title = 'Update Service: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'nameValues' => $nameValues,
        'descriptionValues' => $descriptionValues
    ]) ?>

</div>

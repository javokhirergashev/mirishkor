<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Department $model */

$this->title = 'Yangi bo\'lim yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <ul class="breadcrumb">
                 <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['site/index']) ?>">Dashboard </a></li>
                <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                <li class="breadcrumb-item active"><?= Html::encode($this->title) ?></li>
            </ul>
        </div>
    </div>
</div>
<div class="department-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

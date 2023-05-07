<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Service $model */
/** @var ActiveForm $form */
?>
<div class="service">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'service_name') ?>
        <?= $form->field($model, 'service_description') ?>
        <?= $form->field($model, 'image') ?>
        <?= $form->field($model, 'service_category') ?>
        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'translate_service_name') ?>
        <?= $form->field($model, 'translate_service_description') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- service -->

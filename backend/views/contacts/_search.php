<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\search\ContactsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'addres') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'first_phone') ?>

    <?= $form->field($model, 'second_phone') ?>

    <?php // echo $form->field($model, 'third_phone') ?>

    <?php // echo $form->field($model, 'telegram_link') ?>

    <?php // echo $form->field($model, 'instagram_link') ?>

    <?php // echo $form->field($model, 'facebook_link') ?>

    <?php // echo $form->field($model, 'twitter_link') ?>

    <?php // echo $form->field($model, 'postal_code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

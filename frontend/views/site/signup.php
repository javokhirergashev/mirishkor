<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'firstname')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
            <?= $form->field($model, 'lastname')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
            <?= $form->field($model, 'birth_date')->input('date', ['class' => 'form-control'])->label(false) ?>
            <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

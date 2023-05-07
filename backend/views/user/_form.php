<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>


<?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <form action="#">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Ism</label>
                            <div class="col-md-9">
                                <!--                                <input type="text" class="form-control">-->
                                <?= $form->field($model, 'firstname')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Familiya</label>
                            <div class="col-md-9">
                                <!--                                <input type="text" class="form-control">-->
                                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Tug'ilgan yil</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'birth_date')->input('date', ['class' => 'form-control'])->label(false) ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Login</label>
                            <div class="col-md-9">

                                <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Lavozim</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'position_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Position::find()->all(), 'id', 'position_name'), [
//                                    'prompt' => 'Lavozim',
                                    'options' => [
                                    ]
                                ])->label(false) ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Telefon raqam</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Status</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'status')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Status::find()->all(), 'id', 'status_name'), [
                                    'prompt' => 'Status',
                                    'options' => [
                                    ]
                                ])->label(false) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Rasm</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'image')->label(false)->fileInput(['accept' => 'image/*', 'class' => 'form-control']) ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Telegram</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'telegram_link')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Facebook</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </form>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>



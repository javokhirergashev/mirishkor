<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Vacancy $model */
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
                            <label class="col-md-3 col-form-label">Vakansiya nomi</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'vacancy_name')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Ish haqi</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'salary')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Stavkasi</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'rate')->textInput(['maxlength' => true])->label(false) ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Status</label>
                            <div class="col-md-9">
                                <?= $form->field($model, 'status')->textInput()->label(false) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
                </div>
            </form>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

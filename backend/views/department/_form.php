<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Department $model */
/** @var common\models\Department $nameValues */
/** @var yii\widgets\ActiveForm $form */
?>
<?php $form = ActiveForm::begin(); ?>
<div class="row mb-15">
    <div class="col-md-12">
        <div class="card-box">
            <?php
            // shu yerda ishlatyapman shunga kerak edi
            $languages = Yii::$app->params['languages'];

            $i = 0
            ?>
            <form action="#">
                <div class="row">
                    <ul class="nav nav-tabs">
                        <?php foreach ($languages as $language => $label) { ?>
                            <li class="<?= ($i == 0) ? 'active' : '' ?>"><a data-bs-toggle="tab" aria-expanded="false"
                                                                            class="nav-link"
                                                                            href="#<?= $language ?>"><?= $label ?></a>
                            </li>
                            <?php $i++;
                        } ?>
                    </ul>
                    <div class="tab-content">
                        <?php $j = 0;
                        foreach ($languages as $language => $label) { ?>
                            <div id="<?= $language ?>" class="tab-pane  <?= ($j == 0) ? 'active' : '' ?>">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Bo'lim nomi</label>
                                        <div class="col-md-9">
                                            <?= $form->field($model, 'translate_department_name['.$language.']')->textInput(['maxlength' => true,'value' => (!empty($nameValues[$language]) ? $nameValues[$language] : '')])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Bo'lim raqami</label>
                                        <div class="col-md-9">
                                            <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Status</label>
                                        <div class="col-md-9">
                                            <?= $form->field($model, 'status')->dropDownList(['1' => 'faol', '0' => 'faol emas'])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $j++;
                        } ?>
                        <div class="text-end">
                            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
                        </div>
            </form>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>



<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Menu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row mb-15">
        <div class="col-md-12">
            <div class="card-box">
                <?php
                $languages = Yii::$app->params['languages'];
                $i = 0
                ?>
                <form action="#">
                    <div class="row">
                        <ul class="nav nav-tabs">
                            <?php foreach ($languages as $language => $label) { ?>
                                <li class="<?= ($i == 0) ? 'active' : '' ?>"><a data-bs-toggle="tab"
                                                                                aria-expanded="false"
                                                                                class="nav-link"
                                                                                href="#<?= $language ?>"><?= $label ?></a>
                                </li>
                                <?php $i++;
                            } ?>
                        </ul>
                        <div class="tab-content">
                            <?php $j = 0;
                            foreach ($languages

                                     as $language => $label) { ?>
                                <div id="<?= $language ?>" class="tab-pane  <?= ($j == 0) ? 'active' : '' ?>">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Menu nomi</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'translate_name['.$language.']')->textInput(['maxlength' => true,'value' => (!empty($nameValues[$language]) ? $nameValues[$language] : '')])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Otasi</label>
                                            <div class="col-md-9">

                                                <?= $form->field($model, 'parent_id')->textInput()->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Tartib raqrami</label>
                                            <div class="col-md-9">

                                                <?= $form->field($model, 'order_by')->textInput()->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Positsiyasi</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'position')->textInput()->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Havolasi</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'link')->textInput(['maxlength' => true])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $j++;
                            } ?>
                            <div class="text-end">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php ActiveForm::end(); ?>

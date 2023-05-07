<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Service $model */
/** @var common\models\Service $nameValues */
/** @var common\models\Service $descriptionValues */
/** @var yii\widgets\ActiveForm $form */

?>
<?php $form = ActiveForm::begin(); ?>
    <div class="service-form">
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
                            foreach ($languages as $language => $label) { ?>
                                <div id="<?= $language ?>" class="tab-pane  <?= ($j == 0) ? 'active' : '' ?>">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Xizmat nomi</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'translate_service_name[' . $language . ']')->textInput(['maxlength' => true, (!empty($nameValues[$language]) ? $nameValues[$language] : '')])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Izoh</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'translate_service_description[' . $language . ']')->textInput(['maxlength' => true, (!empty($nameValues[$language]) ? $descriptionValues[$language] : '')])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3">Rasm</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'image')->label(false)->fileInput(['accept' => 'image/*', 'class' => 'form-control']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Narxi</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'price')->textInput(['maxlength' => true, 'class' => 'form-control'])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Kategoriya</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'service_category')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\ServiceCategory::find()->all(), 'id', 'name'), [
                                                    'prompt' => 'Kategoriyani tanlang',
                                                    'options' => [
                                                    ]
                                                ])->label(false) ?>
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
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\News $model */
/** @var yii\widgets\ActiveForm $form */

$this->registerJsFile("@web/backend-files/ckeditor/ckeditor.js");

$js = <<<JS
    CKEDITOR.replace( 'news-translate_body-uz' );
    CKEDITOR.replace( 'news-translate_body-ru' );
    CKEDITOR.replace( 'news-translate_body-en' );
JS;
$this->registerJs($js);

?>
<?php $form = ActiveForm::begin(); ?>
<div class="news-form">
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
                                            <label class="col-md-3 col-form-label">Sarlavha</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'translate_title[' . $language . ']')->textInput(['maxlength' => true, (!empty( $titleValues[$language]) ? $titleValues[$language] : '')])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Izoh</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'translate_description[' . $language . ']')->textInput(['maxlength' => true, 'value' => (!empty( $descriptionValues[$language]) ? $descriptionValues[$language] : '')]) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Yangilik matni</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'translate_body[' . $language . ']')->textarea(['rows' => 5, 'value' => (!empty( $bodyValues[$language]) ? $bodyValues[$language] : '')]) ?>
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
</div>
<?php ActiveForm::end(); ?>



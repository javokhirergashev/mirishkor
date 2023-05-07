<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Contacts $model */
/** @var common\models\Contacts $addressValues */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contacts-form">

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
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Manzil</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'translate_addres[' . $language . ']')->textInput(['maxlength' => true, 'value' => $addressValues[$language]])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-9">

                                                <?= $form->field($model, 'email')->textInput()->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">1-telefon raqram</label>
                                            <div class="col-md-9">

                                                <?= $form->field($model, 'first_phone')->textInput()->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">2-telefon raqam</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'second_phone')->textInput()->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">3-Telefon raqam</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'third_phone')->textInput(['maxlength' => true])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Telegram</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'telegram_link')->textInput(['maxlength' => true])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Instagram</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Facebook</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Tvitter</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'twitter_link')->textInput(['maxlength' => true])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Pochta indeksi</label>
                                            <div class="col-md-9">
                                                <?= $form->field($model, 'postal_code')->textInput(['maxlength' => true])->label(false) ?>
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
    <?php $form = ActiveForm::end(); ?>
</div>

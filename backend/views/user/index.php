<?php

use app\models\User;
use backend\models\StaticFunctions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\search\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Xodimlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= \yii\helpers\Url::to(['site/index']) ?>">Dashboard </a>
                    </li>
                    <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                    <li class="breadcrumb-item active"><?= Html::encode($this->title) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <h3><?= Html::encode($this->title) ?></h3>

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <div class="table-responsive">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'tableOptions' => [
                            'class' => 'table table-hover table-striped table-bordered gridview-table'
                        ],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],


//            'id',
                            'username',
//            'password',
//            'auth_key',
                            'firstname',
                            'lastname',
//                            'position',
//            'birth_date',
                            [
                                'attribute' => 'position_id',
                                'value' => function ($data) {
                                    if ($data->position_id) {
                                        return \common\models\Position::findOne($data->position_id)->position_name;
                                    }
                                }
                            ],
                            'phone',
                            [
                                'attribute' => 'image',
                                'value' => function ($data) {
                                    $image = StaticFunctions::getImage('user', $data->id, $data->image);
                                    return "<img src='{$data->getAvatarImage()}' style='max-width: 60px; max-height: 60px;'";
                                },
                                'format' => 'html'
                            ],
//                'facebook_link',
                            'telegram_link',
                            'created_date',
                            'updated_date',
                            [
                                'attribute' => 'creator',
                                'value' => function ($data) {
                                    if ($data->creator) {
                                        return \common\models\User::findOne($data->creator)->firstname . ' ' . \common\models\User::findOne($data->creator)->lastname;
                                    } else {
                                        return 'superadmin';
                                    }
                                }
                            ],
                            [
                                'attribute' => 'status',
                                'value' => function ($data) {
                                    if ($data->creator) {
                                        return \common\models\Status::findOne($data->status)->status_name;
                                    }
                                }
                            ],
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'header' => 'Amallar',
                                'headerOptions' => ['style' => 'text-align:center'],
                                'template' => '{buttons}',
                                'contentOptions' => ['style' => 'min-width:150px;max-width:150px;width:150px', 'class' => 'v-align-middle'],
                                'buttons' => [
                                    'buttons' => function ($url, $model) {
                                        $controller = Yii::$app->controller->id;
                                        $code = <<<BUTTONS
                                <div class="btn-group flex-center">
                                    <a href="/{$controller}/update?id={$model->id}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                    <a href="/{$controller}/delete?id={$model->id}" id="{$controller}{$model->id}" data-postID="{$model->id}" data-postType="{$controller}" class="btn btn-danger postRemove"><i class="far fa-trash-alt"></i></a>
                                </div>
BUTTONS;
                                        return $code;
                                    }
                                ],
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>

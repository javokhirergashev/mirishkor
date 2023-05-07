<?php

namespace backend\controllers;

use backend\models\StaticFunctions;
use common\models\Service;
use common\models\search\ServiceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ServiceController implements the CRUD actions for Service model.
 */
class ServiceController extends Controller
{
    /**
     * @inheritDoc
     */
//    public function behaviors()
//    {
//        return array_merge(
//            parent::behaviors(),
//            [
//                'verbs' => [
//                    'class' => VerbFilter::className(),
//                    'actions' => [
//                        'delete' => ['POST'],
//                    ],
//                ],
//            ]
//        );
//    }

    /**
     * Lists all Service models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Service model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Service model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Service();
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->service_name = json_encode($model->translate_service_name, JSON_UNESCAPED_SLASHES);
                $model->service_description = json_encode($model->translate_service_description, JSON_UNESCAPED_SLASHES);
                if ($model->save()) {
                    $model->image = UploadedFile::getInstance($model,'image');
                    $model->image = StaticFunctions::saveImage('service',$model->id,$model->image);
                    $model->save();
                    return $this->redirect(['index']);
                }else{
                    debug($model->errors);die;
                }
            }
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Service model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->image;
        $nameValues = json_decode($model->service_name, true);
        $descriptionValues = json_decode($model->service_description, true);
        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->service_name = json_encode($model->translate_service_name, JSON_UNESCAPED_SLASHES);
            $model->service_description = json_encode($model->translate_service_description, JSON_UNESCAPED_SLASHES);
            $model->image = UploadedFile::getInstance($model,'image');
            if (!empty($model->image)){
                $model->image = StaticFunctions::saveImage('service',$model->id,$model->image);
                StaticFunctions::deleteImage('service',$model,$oldImage);
            }else{
                $model->image = $oldImage;
            }

            if ($model->save()){
                return $this->redirect(['index']);
            }else{
                print_r($model->errors);die;
            }
        }

        return $this->render('update', [
            'model' => $model,
            'nameValues' => $nameValues,
            'descriptionValues' => $descriptionValues
        ]);
    }

    /**
     * Deletes an existing Service model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Service model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Service the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Service::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

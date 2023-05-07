<?php

namespace backend\controllers;

use common\models\ServiceCategory;
use common\models\search\ServiceCategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for ServiceCategory model.
 */
class CategoryController extends Controller
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
     * Lists all ServiceCategory models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ServiceCategorySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ServiceCategory model.
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
     * Creates a new ServiceCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ServiceCategory();

        if ($model->load($this->request->post())) {
            echo "<pre>";
//            print_r($model->translate_department_name); die();
            if ($model->validate()) {
                $model->category_name = json_encode($model->translate_category_name, JSON_UNESCAPED_SLASHES);
                $model->save();
                return $this->redirect(['index']);
            } else {
                print_r($model->errors);
                die;
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ServiceCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $nameValues = json_decode($model->category_name, true);
//        print_r($model->department_name);die;
        if ($this->request->isPost && $model->load($this->request->post())) {
            if ($model->validate()) {
                $model->category_name = json_encode($model->translate_category_name, JSON_UNESCAPED_SLASHES);
                $model->save();
                return $this->redirect(['index']);
            } else {
                print_r($model->errors);
                die;
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
            'nameValues' => $nameValues
        ]);
    }

    /**
     * Deletes an existing ServiceCategory model.
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
     * Finds the ServiceCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return ServiceCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ServiceCategory::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

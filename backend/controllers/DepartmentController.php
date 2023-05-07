<?php

namespace backend\controllers;

use common\models\Department;
use common\models\search\DepartmentSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DepartmentController implements the CRUD actions for Department model.
 */
class DepartmentController extends Controller
{
    /**
     * @inheritDoc
     */

    /**
     * Lists all Department models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DepartmentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Department model.
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
     * Creates a new Department model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Department();

        if ($model->load($this->request->post())) {
            echo "<pre>";
//            print_r($model->translate_department_name); die();
            if ($model->validate()) {
                $model->department_name = json_encode($model->translate_department_name, JSON_UNESCAPED_SLASHES);
                $model->created_at = date("Y-m-d H:i:s");
                $model->creator = Yii::$app->user->getId();
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
     * Updates an existing Department model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $nameValues = json_decode($model->department_name, true);
//        print_r($model->department_name);die;
        if ($this->request->isPost && $model->load($this->request->post())) {
            if ($model->validate()) {
                $model->department_name = json_encode($model->translate_department_name, JSON_UNESCAPED_SLASHES);
                $model->updated_at = date("Y-m-d H:i:s");
                $model->creator = Yii::$app->user->getId();
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
     * Deletes an existing Department model.
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
     * Finds the Department model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Department the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Department::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

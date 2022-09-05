<?php

namespace app\controllers;

use app\models\Angkatan;
use app\models\AngkatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AngkatanController implements the CRUD actions for Angkatan model.
 */
class AngkatanController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Angkatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AngkatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Angkatan model.
     * @param int $id_angkatan Id Angkatan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_angkatan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_angkatan),
        ]);
    }

    /**
     * Creates a new Angkatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Angkatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_angkatan' => $model->id_angkatan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Angkatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_angkatan Id Angkatan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_angkatan)
    {
        $model = $this->findModel($id_angkatan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_angkatan' => $model->id_angkatan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Angkatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_angkatan Id Angkatan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_angkatan)
    {
        $this->findModel($id_angkatan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Angkatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_angkatan Id Angkatan
     * @return Angkatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_angkatan)
    {
        if (($model = Angkatan::findOne(['id_angkatan' => $id_angkatan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

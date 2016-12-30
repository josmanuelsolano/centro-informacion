<?php

namespace app\modules\acquisitionbook\controllers;

use Yii;
use common\models\acquisition\Acquisition;
use common\models\acquisition\AcquisitionBooks;
use common\models\acquisition\AcquisitionBooksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AcquisitionbookController implements the CRUD actions for AcquisitionBooks model.
 */
class AcquisitionbookController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AcquisitionBooks models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AcquisitionBooksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AcquisitionBooks model.
     * @param integer $acquisition_books_id
     * @param integer $acquisition_format_id
     * @return mixed
     */
    public function actionView($acquisition_books_id, $acquisition_format_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($acquisition_books_id, $acquisition_format_id),
        ]);
    }

    /**
     * Creates a new AcquisitionBooks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AcquisitionBooks();
        $acquisition = new Acquisition();

        if ($model->load(Yii::$app->request->post()) && $acquisition->load(Yii::$app->request->post())) {
          $acquisition->request_date = date('Y-m-d');
          if ($acquisition->save()) {
            $model->acquisition_format_id = $acquisition->acquisition_format_id;
            if ($model->save()) {
              return $this->redirect(['view', 'acquisition_books_id' => $model->acquisition_books_id, 'acquisition_format_id' => $model->acquisition_format_id]);
            }
          }

        } else {
            return $this->render('create', [
                'model' => $model,
                'acquisition' => $acquisition,
            ]);
        }
    }

    /**
     * Updates an existing AcquisitionBooks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $acquisition_books_id
     * @param integer $acquisition_format_id
     * @return mixed
     */
    public function actionUpdate($acquisition_books_id, $acquisition_format_id)
    {
        $model = $this->findModel($acquisition_books_id, $acquisition_format_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'acquisition_books_id' => $model->acquisition_books_id, 'acquisition_format_id' => $model->acquisition_format_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AcquisitionBooks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $acquisition_books_id
     * @param integer $acquisition_format_id
     * @return mixed
     */
    public function actionDelete($acquisition_books_id, $acquisition_format_id)
    {
        $this->findModel($acquisition_books_id, $acquisition_format_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AcquisitionBooks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $acquisition_books_id
     * @param integer $acquisition_format_id
     * @return AcquisitionBooks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($acquisition_books_id, $acquisition_format_id)
    {
        if (($model = AcquisitionBooks::findOne(['acquisition_books_id' => $acquisition_books_id, 'acquisition_format_id' => $acquisition_format_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

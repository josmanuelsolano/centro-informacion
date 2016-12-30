<?php

namespace app\modules\loan\controllers;

use Yii;
use common\models\loan\Loan;
use common\models\loan\LoanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LoanController implements the CRUD actions for Loan model.
 */
class LoanController extends Controller
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
     * Lists all Loan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LoanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Loan model.
     * @param integer $loan_id
     * @param integer $book_book_id
     * @param integer $status_status_id
     * @return mixed
     */
    public function actionView($loan_id, $book_book_id, $status_status_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($loan_id, $book_book_id, $status_status_id),
        ]);
    }

    /**
     * Creates a new Loan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Loan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'loan_id' => $model->loan_id, 'book_book_id' => $model->book_book_id, 'status_status_id' => $model->status_status_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Loan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $loan_id
     * @param integer $book_book_id
     * @param integer $status_status_id
     * @return mixed
     */
    public function actionUpdate($loan_id, $book_book_id, $status_status_id)
    {
        $model = $this->findModel($loan_id, $book_book_id, $status_status_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'loan_id' => $model->loan_id, 'book_book_id' => $model->book_book_id, 'status_status_id' => $model->status_status_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Loan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $loan_id
     * @param integer $book_book_id
     * @param integer $status_status_id
     * @return mixed
     */
    public function actionDelete($loan_id, $book_book_id, $status_status_id)
    {
        $this->findModel($loan_id, $book_book_id, $status_status_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Loan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $loan_id
     * @param integer $book_book_id
     * @param integer $status_status_id
     * @return Loan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($loan_id, $book_book_id, $status_status_id)
    {
        if (($model = Loan::findOne(['loan_id' => $loan_id, 'book_book_id' => $book_book_id, 'status_status_id' => $status_status_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

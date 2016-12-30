<?php

namespace app\modules\book\controllers;

use Yii;
use common\models\book\Book;
use common\models\book\BookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends Controller
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
     * Lists all Book models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Book model.
     * @param integer $book_id
     * @param integer $carrer_carrer_id
     * @return mixed
     */
    public function actionView($book_id, $carrer_carrer_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($book_id, $carrer_carrer_id),
        ]);
    }

    /**
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Book();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'book_id' => $model->book_id, 'carrer_carrer_id' => $model->carrer_carrer_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Book model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $book_id
     * @param integer $carrer_carrer_id
     * @return mixed
     */
    public function actionUpdate($book_id, $carrer_carrer_id)
    {
        $model = $this->findModel($book_id, $carrer_carrer_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'book_id' => $model->book_id, 'carrer_carrer_id' => $model->carrer_carrer_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Book model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $book_id
     * @param integer $carrer_carrer_id
     * @return mixed
     */
    public function actionDelete($book_id, $carrer_carrer_id)
    {
        $this->findModel($book_id, $carrer_carrer_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $book_id
     * @param integer $carrer_carrer_id
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($book_id, $carrer_carrer_id)
    {
        if (($model = Book::findOne(['book_id' => $book_id, 'carrer_carrer_id' => $carrer_carrer_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

<?php

namespace app\controllers;

use Yii;
use app\models\NonConfirmingProduct;
use app\models\NonConfirmingProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NonConfirmingProductController implements the CRUD actions for NonConfirmingProduct model.
 */
class NonConfirmingProductController extends Controller
{
    public function actions()
    {
        return [
            'editable' => [
                'class' => 'mcms\xeditable\XEditableAction',
                'modelclass' => NonConfirmingProduct::className(),
            ],
        ];
    }
    /**
     * {@inheritdoc}
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
     * Lists all NonConfirmingProduct models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NonConfirmingProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NonConfirmingProduct model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new NonConfirmingProduct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NonConfirmingProduct();

        if ($model->load(Yii::$app->request->post())) {

            $model->created_at = date('Y-m-d H:i:s');
            $model->save();

            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NonConfirmingProduct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NonConfirmingProduct model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NonConfirmingProduct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NonConfirmingProduct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NonConfirmingProduct::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionPrint($id){
        $model = NonConfirmingProduct::findOne($id);
        $content = $this->renderPartial('_print', ['nonconfi' => $model]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;
        return $pdf->render();
    }
}

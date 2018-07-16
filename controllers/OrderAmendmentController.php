<?php

namespace app\controllers;

use app\models\OrderAmendmentProducts;
use Yii;
use app\models\OrderAmendment;
use app\models\OrderAmendmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderAmendmentController implements the CRUD actions for OrderAmendment model.
 */
class OrderAmendmentController extends Controller
{
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
     * Lists all OrderAmendment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderAmendmentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderAmendment model.
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
     * Creates a new OrderAmendment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrderAmendment();
        $request = Yii::$app->request->post();

        if ($model->load(Yii::$app->request->post())) {
            $model->created_at = date('Y-m-d H:i:s');
            if ($model->save()) {
                $size = sizeof($request['OrderAmendmentProducts']['product_id']);

                for ($i = 0; $i < $size; $i++) {
                    $orderAMP = new OrderAmendmentProducts();
                    /*echo '<pre>';print_r($request['BillOfMaterial']['product_code']); exit();*/


                    $orderAMP->order_amendment_id = $model->order_amendment_id;
                    $orderAMP->product_id = $request['OrderAmendmentProducts']['product_id'][$i];
                    $orderAMP->reviced_desc = $request['OrderAmendmentProducts']['reviced_desc'][$i];
                    $orderAMP->quantity = $request['OrderAmendmentProducts']['quantity'][$i];
                    $orderAMP->rate_per_unit = $request['OrderAmendmentProducts']['rate_per_unit'][$i];
                    $orderAMP->total_amount = $request['OrderAmendmentProducts']['total_amount'][$i];


                    if (!$orderAMP->save()) {
                        return print_r($orderAMP->errors);
                    }
                }
            }

            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OrderAmendment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_amendment_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OrderAmendment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        OrderAmendmentProducts::deleteAll(['order_amendment_id' => $model->order_amendment_id]);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrderAmendment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrderAmendment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrderAmendment::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new OrderAmendmentProducts();
        return $this->renderAjax('_product', [
            'model' => $model,
            'i' => rand() . $i,
        ]);
    }

    public function actionPrint($id)
    {
        $model = OrderAmendment::findOne($id);
        $orderAmendmentProducts = OrderAmendmentProducts::find(['order_amendment_id' => $id])->all();
        $content = $this->renderPartial('_print', [
            'orderAmendment' => $model,
            'orderAmendmentProducts' => $orderAmendmentProducts
        ]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;
        return $pdf->render();

    }
}

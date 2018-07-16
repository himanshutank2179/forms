<?php

namespace app\controllers;

use app\models\WorkOrderProducts;
use Yii;
use app\models\WorkOrder;
use app\models\WorkOrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WorkOrderController implements the CRUD actions for WorkOrder model.
 */
class WorkOrderController extends Controller
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
     * Lists all WorkOrder models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WorkOrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WorkOrder model.
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
     * Creates a new WorkOrder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WorkOrder();
        $request = Yii::$app->request->post();

        if ($model->load(Yii::$app->request->post())) {
            $model->created_at = date('Y-m-d');
            $size = sizeof($request['WorkOrderProducts']['product_id']);

            for ($i = 0; $i < $size; $i++) {
                $workOrderProduct = new WorkOrderProducts();
                /*echo '<pre>';print_r($request['BillOfMaterial']['product_code']); exit();*/
                $workOrderProduct->product_id = $request['WorkOrderProducts']['product_id'][$i];
                $workOrderProduct->drawing_no = $request['WorkOrderProducts']['drawing_no'][$i];
                $workOrderProduct->required_qty = $request['WorkOrderProducts']['required_qty'][$i];
                $workOrderProduct->delivery_required_at = $request['WorkOrderProducts']['delivery_required_at'][$i];
                $workOrderProduct->job_card_no = $request['WorkOrderProducts']['job_card_no'][$i];
                $workOrderProduct->actual_qty = $request['WorkOrderProducts']['actual_qty'][$i];
                $workOrderProduct->pending = $request['WorkOrderProducts']['pending'][$i];


                if (!$workOrderProduct->save(false)) {
                    return print_r($workOrderProduct->errors);
                }
            }
            $model->save();
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing WorkOrder model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->work_order_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing WorkOrder model.
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
     * Finds the WorkOrder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WorkOrder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WorkOrder::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new WorkOrderProducts();
        return $this->renderAjax('_product', [
            'model' => $model,
            'i' => rand() . $i,
        ]);
    }
}

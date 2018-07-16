<?php

namespace app\controllers;

use app\models\ProductMaster;
use app\models\Vendors;
use Yii;
use app\models\PurchaseOrder;
use app\models\PurchaseOrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PurchaseOrderController implements the CRUD actions for PurchaseOrder model.
 */
class PurchaseOrderController extends Controller
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
     * Lists all PurchaseOrder models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PurchaseOrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $model = new PurchaseOrder();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return 1;
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model
        ]);
    }

    /**
     * Displays a single PurchaseOrder model.
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
     * Creates a new PurchaseOrder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PurchaseOrder();

        /*echo '<pre>';
        print_r(Yii::$app->request->post());
        exit();*/
        if ($model->load(Yii::$app->request->post())) {
            $request = Yii::$app->request->post();
            /*debugPrint($request['PurchaseOrder']);*/
            $PONO = rand();

            $size = sizeof($request['PurchaseOrder']['product_id']);
            for ($i = 0; $i < $size; $i++) {
                $po = new PurchaseOrder();

                $vendorDetails = Vendors::findOne($request['PurchaseOrder']['vendor_id'][$i]);

                $po->po_no = (string)$PONO;
                $po->product_id = $request['PurchaseOrder']['product_id'][$i];
                $po->vendor_id = $request['PurchaseOrder']['vendor_id'][$i];
                $po->qty = $request['PurchaseOrder']['qty'][$i];
                $po->unit_price = $request['PurchaseOrder']['unit_price'][$i];
                $po->gst = $request['PurchaseOrder']['gst'][$i];
                $totalPrice = $po->qty * $po->unit_price;
                $igst = ($totalPrice * $po->gst) / 100;
                $half = $igst / 2;
                if ($vendorDetails->state_id == Yii::$app->session->get('company')->state_id) {

                    $po->cgst = $half;
                    $po->sgst = $half;

                    $po->igst = 0;

                } else {
                    $po->cgst = 0;
                    $po->sgst = 0;
                    $po->igst = $igst;
                }

                $po->quote_ref_no = $request['PurchaseOrder']['quote_ref_no'];
                $po->inspection_by = $request['PurchaseOrder']['inspection_by'];
                $po->terms = $request['PurchaseOrder']['terms'];
                $po->delivery_period = $request['PurchaseOrder']['delivery_period'];
                $po->delivery_required_at = $request['PurchaseOrder']['delivery_required_at'];
                $po->mode_of_dispatch = $request['PurchaseOrder']['mode_of_dispatch'];
                $po->payment_terms = $request['PurchaseOrder']['payment_terms'];
                $po->created_at = date('Y-m-d H:i:s');

                if (!$po->save()) {

                }
            }

            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PurchaseOrder model.
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
     * Deletes an existing PurchaseOrder model.
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
     * Finds the PurchaseOrder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PurchaseOrder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PurchaseOrder::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new PurchaseOrder();
        return $this->renderAjax('_product', [
            'model' => $model,
            'i' => $i,
        ]);
    }

    public function actionGetProductDetails($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $product = ProductMaster::find()->where(['product_master_id' => $id])->one();
        return ['product' => $product, 'parameter' => $product->productParameters];
    }

    public function actionGetVendorDetails($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return Vendors::findOne($id);
    }
}

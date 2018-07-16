<?php

namespace app\controllers;

use app\models\PurchaseInventory;
use app\models\PurchaseOrder;
use Yii;
use app\models\PurchaseReceipt;
use app\models\PurchaseReceiptSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PurchaseReceiptController implements the CRUD actions for PurchaseReceipt model.
 */
class PurchaseReceiptController extends Controller
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
     * Lists all PurchaseReceipt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PurchaseReceiptSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PurchaseReceipt model.
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
     * Creates a new PurchaseReceipt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PurchaseReceipt();

        if ($model->load(Yii::$app->request->post())) {
            $request = Yii::$app->request->post();
            /*echo '<pre>';
            print_r($request['PurchaseReceipt']['gst'][$i]);
            exit();*/
            $GRNNO = rand(pow(10, 6 - 1), pow(10, 6) - 1) . (PurchaseReceipt::find()->count() + 1);

            $size = sizeof($request['PurchaseReceipt']['product_id']);
            for ($i = 0; $i < $size; $i++) {
                $pr = new PurchaseReceipt();
                $pr->po_no = (string)$request['PurchaseReceipt']['po_no'];
                $pr->GRN_NO = (string) $GRNNO;
                $pr->product_id = $request['PurchaseReceipt']['product_id'][$i];
                $pr->unit = $request['PurchaseReceipt']['unit'][$i];
                $pr->receive_qty = $request['PurchaseReceipt']['receive_qty'][$i];
                $pr->rejected_qty = $request['PurchaseReceipt']['rejected_qty'][$i];
                $pr->accepted_qty = $request['PurchaseReceipt']['accepted_qty'][$i];
                $pr->unit_price = $request['PurchaseReceipt']['unit_price'][$i];
                $pr->order_no = $request['PurchaseReceipt']['order_no'][$i];
                $pr->gst = $request['PurchaseReceipt']['gst'][$i];
                if ($request['PurchaseReceipt']['isInterState'][$i] == 1) {
                    $pr->cgst = $request['PurchaseReceipt']['cgst'][$i];
                    $pr->sgst = $request['PurchaseReceipt']['sgst'][$i];
                } else {
                    $pr->igst = $request['PurchaseReceipt']['igst'][$i];
                }


                $pr->total_amount = $request['PurchaseReceipt']['total_amount'][$i];
                $pr->remark = $request['PurchaseReceipt']['remark'][$i];
                $pr->is_approved = 2;
                $pr->created_at = date('Y-m-d H:i:s');
                if ($pr->save()) {

                    /********************************************************
                                    BELOW CODE IS FOR MANAGE STOCK
                                    INVENTORY PLEASE CHANGE IT ONCE QC COMPLETED
                                    AND RAW MATERIAL WILL BE APPROVED
                    ****************************************************** */

                    /*$isProductAvailable = PurchaseInventory::find()->where(['product_id' => $request['PurchaseReceipt']['product_id'][$i]])->one();*/
                   /* if (empty($isProductAvailable)) {*/
                        /* IF PRODUCT IS NOT AVAILABLE IN INVENTORY */
                        /*$newInventoryItem = new PurchaseInventory();
                        $newInventoryItem->product_id = $request['PurchaseReceipt']['product_id'][$i];
                        $newInventoryItem->initial_qty = $request['PurchaseReceipt']['accepted_qty'][$i];
                        $newInventoryItem->current_qty = $request['PurchaseReceipt']['accepted_qty'][$i];
                        $newInventoryItem->unit_price = $request['PurchaseReceipt']['unit_price'][$i];
                        $newInventoryItem->note = '';
                        $newInventoryItem->product_sku = rand(pow(10, 6 - 1), pow(10, 6) - 1);
                        $newInventoryItem->created_at = date('Y-m-d H:i:s');
                        $newInventoryItem->save(false);*/
                    /*} else {*/

                        /* IF PRODUCT IS ALREADY AVAILABLE IN INVENTORY */
                        /*$isProductAvailable->current_qty = ($isProductAvailable->current_qty + $request['PurchaseReceipt']['accepted_qty'][$i]);
                        $isProductAvailable->unit_price = $request['PurchaseReceipt']['unit_price'][$i];
                        $isProductAvailable->save(false);*/

                   /* }*/
                } else {
                    echo '<pre>';
                    print_r($pr->errors);
                    exit();
                }
            }
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PurchaseReceipt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->purchase_receipt_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PurchaseReceipt model.
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
     * Finds the PurchaseReceipt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PurchaseReceipt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PurchaseReceipt::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new PurchaseReceipt();
        return $this->renderAjax('_product', [
            'model' => $model,
            'i' => $i,
        ]);
    }

    public function actionGetPurchaseOrders($pono)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return PurchaseOrder::find()->where(['po_no' => $pono])->all();
    }
}

<?php

namespace app\controllers;

use app\models\IncommingQcParameters;
use app\models\NonConfirmingProduct;
use app\models\Parameters;
use app\models\ProductParameters;
use app\models\PurchaseInventory;
use app\models\PurchaseOrder;
use app\models\PurchaseReceipt;
use Yii;
use app\models\IncommingQc;
use app\models\IncommingQcSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IncommingQcController implements the CRUD actions for IncommingQc model.
 */
class IncommingQcController extends Controller
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
     * Lists all IncommingQc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IncommingQcSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IncommingQc model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }


    /**
     * Creates a new IncommingQc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new IncommingQc();

        if ($model->load(Yii::$app->request->post())) {
            $request = Yii::$app->request->post();
              /*echo '<pre>';
               print_r(Yii::$app->request->post());
               exit();*/
            $size = sizeof($request['IncommingQc']['product_id']);
            for ($i = 0; $i < $size; $i++) {
                $iqc = new IncommingQc();
                $iqc->GRN_NO = (string)$request['IncommingQc']['GRN_NO'];
                $iqc->product_id = $request['IncommingQc']['product_id'][$i];
                $iqc->manufacturer = $request['IncommingQc']['manufacturer'][$i];
                $iqc->label_particulars = $request['IncommingQc']['label_particulars'][$i];
                $iqc->mfg_date = $request['IncommingQc']['mfg_date'][$i];
                $iqc->heat = $request['IncommingQc']['heat'][$i];
                $iqc->lot = $request['IncommingQc']['lot'][$i];
                $iqc->batch_no = $request['IncommingQc']['batch_no'][$i];
                $iqc->v_test_no = $request['IncommingQc']['v_test_no'][$i];
                $iqc->accepted_qty = $request['IncommingQc']['accepted_qty'][$i];
                $iqc->rejected_qty = $request['IncommingQc']['rejected_qty'][$i];

                $iqc->date = $request['IncommingQc']['date'][$i];
                $iqc->qty = $request['IncommingQc']['qty'][$i];
                $iqc->inspected_by = $request['IncommingQc']['inspected_by'][$i];
                $iqc->approved_by = $request['IncommingQc']['approved_by'][$i];
                $iqc->remark = $request['IncommingQc']['remark'][$i];
                $iqc->created_at = date('Y-m-d H:i:s');
                $iqc->is_approved = ($request['IncommingQc']['is_approved'][$i] == 1);
                if ($iqc->save()) {
                    $purchaseReceipt = PurchaseReceipt::find()->where(['GRN_NO' => $request['IncommingQc']['GRN_NO'], 'product_id' => $request['IncommingQc']['product_id'][$i]])->one();
                    /* UPDATING MATERIAL RECEIPT QTY */
                    if(!empty($purchaseReceipt)){
                        $purchaseReceipt->receive_qty = $request['IncommingQc']['qty'][$i];
                        $purchaseReceipt->rejected_qty = $request['IncommingQc']['rejected_qty'][$i];
                        $purchaseReceipt->accepted_qty = $request['IncommingQc']['accepted_qty'][$i];
                        $purchaseReceipt->save(false);
                    }
                    /* UPDATING ENDS MATERIAL RECEIPT QTY */



                    /* UPDATING STATUS TO PURCHASE RECEIPT */
                    PurchaseReceipt::updateAll(['is_approved' => $request['IncommingQc']['is_approved'][$i]], ['GRN_NO' => $request['IncommingQc']['GRN_NO'], 'product_id' => $request['IncommingQc']['product_id'][$i]]);
                    if ($request['IncommingQc']['is_approved'][$i] == 1) {

                        $isProductAvailable = PurchaseInventory::find()->where(['product_id' => $request['IncommingQc']['product_id'][$i]])->one();

                        if (empty($isProductAvailable)) {
                            /* IF PRODUCT IS NOT AVAILABLE IN INVENTORY */
                            $newInventoryItem = new PurchaseInventory();
                            $newInventoryItem->product_id = $request['IncommingQc']['product_id'][$i];
                            $newInventoryItem->initial_qty = $request['IncommingQc']['accepted_qty'][$i];
                            $newInventoryItem->current_qty = $request['IncommingQc']['accepted_qty'][$i];
                            $newInventoryItem->unit_price = $purchaseReceipt->unit_price;
                            $newInventoryItem->note = '';
                            $newInventoryItem->product_sku = rand(pow(10, 6 - 1), pow(10, 6) - 1);
                            $newInventoryItem->created_at = date('Y-m-d H:i:s');
                            $newInventoryItem->save(false);
                        } else {

                            /* IF PRODUCT IS ALREADY AVAILABLE IN INVENTORY */
                            $isProductAvailable->current_qty = ($isProductAvailable->current_qty + $request['IncommingQc']['accepted_qty'][$i]);
                            $isProductAvailable->unit_price = $purchaseReceipt->unit_price;
                            $isProductAvailable->save(false);

                        }
                    }

                    /* UPDATING NON CONFIRMING PRODUCT REGISTER IF REJECTED QTY GREATER THEN 0 */
                    if($request['IncommingQc']['rejected_qty'][$i] > 0){
                        $rejectedQty = new NonConfirmingProduct();
                        $rejectedQty->date = date('Y-m-d H:i:s');
                        $rejectedQty->GRN_NO = $request['IncommingQc']['GRN_NO'];
                        $rejectedQty->product_id = $request['IncommingQc']['product_id'][$i];
                        $rejectedQty->resion = '';
                        $rejectedQty->qty = $request['IncommingQc']['rejected_qty'][$i];
                        $rejectedQty->balance = '0';
                        $rejectedQty->return_to_vendor_qty = 0;
                        $rejectedQty->rework_qty = 0;
                        $rejectedQty->scrap_qty = 0;
                        $rejectedQty->sales_on_discount_qty = 0;
                        $rejectedQty->sign_of_prod = '0';
                        $rejectedQty->created_at = date('Y-m-d H:i:s');
                        if(!$rejectedQty->save(false)){
                            echo '<pre>';
                            print_r($rejectedQty->errors);
                            exit();
                        }
                    }

                    $sizeOf = sizeof($request['IncommingQcParameters']['parameter_id']);
                    for ($j = 0; $j < $sizeOf; $j++) {
                        $iqcp = new IncommingQcParameters();
                        $iqcp->parameter_id = $request['IncommingQcParameters']['parameter_id'][$j];
                        $iqcp->unit = $request['IncommingQcParameters']['unit'][$j];
                        $iqcp->actual = $request['IncommingQcParameters']['actual'][$j];
                        $iqcp->observation = $request['IncommingQcParameters']['observation'][$j];
                        $iqcp->incomming_qc_id = $iqc->incomming_qc_id;
                        if (!$iqcp->save(false)) {
                            echo '<pre>';
                            print_r($iqcp->errors);
                            exit();
                        }
                    }

                } else {
                    echo '<pre>';
                    print_r($iqc->errors);
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
     * Updates an existing IncommingQc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->incomming_qc_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IncommingQc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->is_deleted = 1;
        $model->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the IncommingQc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return IncommingQc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = IncommingQc::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new IncommingQc();
        return $this->renderAjax('_product', [
            'model' => $model,
            'i' => $i,
        ]);
    }

    public function actionGetParameterForm($i = 0)
    {
        $model = new IncommingQcParameters();
        return $this->renderAjax('_parameter', [
            'model' => $model,
            'i' => $i,
        ]);
    }

    public function actionGetPurchaseOrders($grno)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return PurchaseOrder::find()->where(['po_no' => $grno])->all();
    }

    public function actionGetProductParameters($product_id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return Parameters::find()->where(['product_id' => $product_id])->all();
    }

    public function actionGetPurchaseReceipt($grno)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return PurchaseReceipt::find()->where(['GRN_NO' => $grno])->all();
    }

    public function actionQcResult($param, $product_id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $product_param = ProductParameters::find()
            ->joinWith('parameter')
            ->where(['product_id' => $product_id])
            ->andFilterWhere(['like', 'parameters.name', $param])
            ->one();
        if ($product_param) {
            $result = Parameters::find()->where(['parameter_id' => $product_param->parameter_id])->one();
            if ($result) {
                return $result;
            } else {
                return 0;
            }
        } else {
            return 0;
        }


    }

    public function actionApproval($id)
    {
        $model = $this->findModel($id);
        $isProductAvailable = PurchaseInventory::find()->where(['product_id' => $model->product_id])->one();
        $purchaseReceipt = PurchaseReceipt::find()->where(['GRN_NO' => $model->GRN_NO, 'product_id' => $model->product_id])->one();
        if ($model->is_approved == 0) {
            $model->is_approved = 1;
            PurchaseReceipt::updateAll(['is_approved' => 1], ['GRN_NO' => $model->sr_no, 'product_id' => $model->product_id]);
            /* MANAGING STOCK */
            if ($isProductAvailable) {
                $isProductAvailable->current_qty = ($isProductAvailable->current_qty + $purchaseReceipt->accepted_qty);
                $isProductAvailable->save(false);
            }
        } else {
            $model->is_approved = 0;
            PurchaseReceipt::updateAll(['is_approved' => 0], ['GRN_NO' => $model->GRN_NO, 'product_id' => $model->product_id]);
            /* MANAGING INVENTORY */
            if ($isProductAvailable) {
                $isProductAvailable->current_qty = ($isProductAvailable->current_qty - $purchaseReceipt->accepted_qty);
                $isProductAvailable->save(false);
            }
        }
        if ($model->save(false)) {
            return 1;
        } else {
            echo json_encode($model->errors);
        }
    }


}

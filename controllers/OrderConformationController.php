<?php

namespace app\controllers;

use app\helpers\AppHelper;
use app\models\Indent;
use app\models\OrderConfProducts;
use app\models\ProductInventory;
use Yii;
use app\models\OrderConformation;
use app\models\OrderConformationSearch;
use app\models\OrderQuotation;
use app\models\QuotationProducts;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderConformationController implements the CRUD actions for OrderConformation model.
 */
class OrderConformationController extends Controller
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
     * Lists all OrderConformation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderConformationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderConformation model.
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
     * Creates a new OrderConformation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrderConformation();

        if ($model->load(Yii::$app->request->post())) {
            $data = Yii::$app->request->bodyParams;
            /* echo "<pre>";
             print_r($data['OrderConformation']['is_ready_to_sale']);
             exit();*/
            $model->created_at = date('Y-m-d H:i:s');
            $model->order_number = AppHelper::getRandomOrderNo();
            if ($model->save()) {
                if (isset($data['OrderConfProducts']['product_id'])) {
                    $size = sizeof($data['OrderConfProducts']['product_id']);
                    for ($i = 0; $i < $size; $i++) {
                        $qproduct = new OrderConfProducts();
                        $qproduct->product_id = $data['OrderConfProducts']['product_id'][$i];
                        $qproduct->order_conformation_id = $model->order_conformation_id;
                        $qproduct->quantity = $data['OrderConfProducts']['quantity'][$i];
                        $qproduct->rate = $data['OrderConfProducts']['rate'][$i];
                        $qproduct->gst = $data['OrderConfProducts']['gst'][$i];
                        $qproduct->sgst = $data['OrderConfProducts']['sgst'][$i];
                        $qproduct->cgst = $data['OrderConfProducts']['cgst'][$i];
                        $qproduct->igst = $data['OrderConfProducts']['igst'][$i];
                        $qproduct->total_gst = $data['OrderConfProducts']['total_gst'][$i];
                        $qproduct->total_amount = $data['OrderConfProducts']['total_amount'][$i];
                        if ($qproduct->save()) {
                            // Checking Is Ready To sale
                            if ($data['OrderConformation']['is_ready_to_sale'] == 'YES') {
                                // Checking For Finish Product Availability
                                $productInventory = ProductInventory::find()
                                    ->where(['product_id' => $qproduct->product_id])
                                    ->andWhere(['>=', 'current_qty', $qproduct->quantity])
                                    ->one();
                                if ($productInventory) {
                                    $productInventory->current_qty = ($productInventory->current_qty - $qproduct->quantity);
                                    $productInventory->save(false);
                                } else {
                                    $requiredQty = $productInventory->current_qty - $qproduct->quantity;
                                    // Creating Indent
                                    $newIndent = new Indent();
                                    $newIndent->purchase_indent_no = date('Ymd') . rand(0000, 9999);
                                    $newIndent->date = date('Y-m-d');
                                    $newIndent->purchase_monitoring = 'N/A';
                                    $newIndent->reviewed_by = 0;
                                    $newIndent->remark = 'N/A';
                                    $newIndent->created_at = date('Y-m-d H:s:i');
                                    if ($newIndent->save(false)) {


                                    }

                                }

                            } else {

                            }


                        }
                    }
                }
            } else {
                print_r($model->errors);
                exit();
            }
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OrderConformation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_conformation_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OrderConformation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        OrderConfProducts::deleteAll(['order_conformation_id' => $id]);

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrderConformation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrderConformation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrderConformation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new OrderConfProducts();
        return $this->renderAjax('_product', [
            'model' => $model,
            'i' => $i,
        ]);
    }

    public function actionGetQrnData($qrnid)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $qrndata = OrderQuotation::find()->where(['order_quotation_id' => $qrnid])->one();
        $order_product = QuotationProducts::find()->where(['order_quotation_id' => $qrnid])->all();

        if ($order_product) {
            return array($qrndata, $order_product);
        } else {
            return false;
        }

    }

    public function actionPrint($id)
    {
        $model = OrderConformation::findOne($id);
        $orderConfProducts = OrderConfProducts::find(['order_conformation_id' => $id])->all();
        $content = $this->renderPartial('_print', [
            'order_confirmation' => $model,
            'orderConfProducts' => $orderConfProducts
        ]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;
        return $pdf->render();

    }
}

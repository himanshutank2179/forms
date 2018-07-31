<?php

namespace app\controllers;

use app\helpers\AppHelper;
use app\models\Cities;
use app\models\QuotationProducts;
use app\models\States;
use Yii;
use app\models\OrderQuotation;
use app\models\OrderQuotationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderQuotationController implements the CRUD actions for OrderQuotation model.
 */
class OrderQuotationController extends Controller
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
     * Lists all OrderQuotation models.
     * @return mixed
     */
    public function actionIndex($type)
    {
        $searchModel = new OrderQuotationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $type);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Displays a single OrderQuotation model.
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
     * Creates a new OrderQuotation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($type = 'quotations')
    {
        $model = new OrderQuotation();


        if ($model->load(Yii::$app->request->post())) {
            $data = Yii::$app->request->bodyParams;



            $model->created_at = date('Y-m-d H:i:s');
            $model->type = $type;
            if ($type = 'requirements') {
                $model->inquiry_number = AppHelper::getRandomOrderNo();
            } else {
                $model->our_quote_ref_num = AppHelper::getRandomOrderNo();
            }
            $isModelSaved = ($type == 'requirements') ? $model->save(false) : $model->save();
            if ($isModelSaved) {
                if (isset($data['QuotationProducts']['product_id'])) {
                    $size = sizeof($data['QuotationProducts']['product_id']);
                    for ($i = 0; $i < $size; $i++) {
                        $qproduct = new QuotationProducts();

                        $qproduct->product_id = $data['QuotationProducts']['product_id'][$i];
                        $qproduct->order_quotation_id = $model->order_quotation_id;
                        $qproduct->quantity = $data['QuotationProducts']['quantity'][$i];
                        $qproduct->rate = $data['QuotationProducts']['rate'][$i];
                        $qproduct->gst = $data['QuotationProducts']['gst'][$i];
                        $qproduct->sgst = $data['QuotationProducts']['sgst'][$i];
                        $qproduct->cgst = $data['QuotationProducts']['cgst'][$i];
                        $qproduct->igst = $data['QuotationProducts']['igst'][$i];
                        $qproduct->total_gst = $data['QuotationProducts']['total_gst'][$i];
                        $qproduct->total_amount = $data['QuotationProducts']['total_amount'][$i];
                        $isProductSaved = ($type == 'requirements') ? $qproduct->save(false) : $qproduct->save();
                        if (!$isProductSaved) {
                            print_r($qproduct->errors);
                            exit();
                        }
                    }
                }
            } else {
                print_r($model->errors);
                exit();
            }


            // If isQuoteIncluded is 1 then creating Quote
            $newQoute = new OrderQuotation();
            $request = Yii::$app->request->bodyParams;
            $newQoute->attributes = $data['OrderQuotation'];
            $newQoute->created_at = date('Y-m-d H:i:s');
            $newQoute->type = $type;
            $newQoute->inquiry_number = $model->inquiry_number;
            $newQoute->type = 'quotations';
            $newQoute->our_quote_ref_num = AppHelper::getRandomOrderNo();

            $isModelSaved = $newQoute->save(false);
            if ($isModelSaved) {
                if (isset($request['QuotationProducts']['product_id'])) {
                    $size = sizeof($request['QuotationProducts']['product_id']);
                    for ($i = 0; $i < $size; $i++) {
                        $qproduct = new QuotationProducts();
                        $qproduct->product_id = $request['QuotationProducts']['product_id'][$i];
                        $qproduct->order_quotation_id = $model->order_quotation_id;
                        $qproduct->quantity = $request['QuotationProducts']['quantity'][$i];
                        $qproduct->rate = $request['QuotationProducts']['rate'][$i];
                        $qproduct->gst = $request['QuotationProducts']['gst'][$i];
                        $qproduct->sgst = $request['QuotationProducts']['sgst'][$i];
                        $qproduct->cgst = $request['QuotationProducts']['cgst'][$i];
                        $qproduct->igst = $request['QuotationProducts']['igst'][$i];
                        $qproduct->total_gst = $request['QuotationProducts']['total_gst'][$i];
                        $qproduct->total_amount = $request['QuotationProducts']['total_amount'][$i];
                        $isProductSaved = $qproduct->save(false);
                        if (!$isProductSaved) {
                            print_r($qproduct->errors);
                            exit();
                        }
                    }
                }
            } else {
                print_r($newQoute->errors);
                exit();
            }
            return $this->redirect(['index?type=' . $type]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OrderQuotation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $type)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_quotation_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OrderQuotation model.
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
     * Finds the OrderQuotation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrderQuotation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrderQuotation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new QuotationProducts();
        return $this->renderAjax('_product', [
            'model' => $model,
            'i' => $i,
        ]);
    }

    public function actionCityList($id)
    {
        $cities = Cities::find()
            ->where(['state_id' => $id])
            ->all();

        if (!empty($cities)) {
            foreach ($cities as $city) {
                echo "<option value='" . $city->id . "'>" . $city->name . "</option>";
            }
        } else {
            echo "<option>-</option>";
        }

    }

    public function actionStateList($id)
    {
        $data = States::find()
            ->where(['country_id' => $id])
            ->all();

        if (!empty($data)) {
            foreach ($data as $s) {
                echo "<option value='" . $s->id . "'>" . $s->name . "</option>";
            }
        } else {
            echo "<option>-</option>";
        }

    }

    public function actionPrintOrderquotation($id)
    {
        $model = OrderQuotation::findOne($id);
        $content = $this->renderPartial('_print_quotation', ['quotation' => $model]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;
        return $pdf->render();
    }

    public function actionGetInquiry($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $inquiry = OrderQuotation::find()->where(['order_quotation_id' => $id])->one();
        $products = $inquiry->quotationProducts;
        return [$inquiry, $products];
    }
}

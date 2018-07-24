<?php

namespace app\controllers;

use app\models\JobcardOperationDetails;
use app\models\JobcardOperationParameter;
use app\models\JobcardRawMaterials;
use app\models\Parameters;
use app\models\ProductInventory;
use Yii;
use app\models\Jobcard;
use app\models\JobcardSearch;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JobcardController implements the CRUD actions for Jobcard model.
 */
class JobcardController extends Controller
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
     * Lists all Jobcard models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JobcardSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jobcard model.
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
     * Creates a new Jobcard model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Jobcard();

        $request = Yii::$app->request->post();


        if ($model->load(Yii::$app->request->post())) {

            $model->date = $request['Jobcard']['date'];
            $model->product_description = $request['Jobcard']['product_description'];
            $model->finish_product_id = $request['Jobcard']['finish_product_id'];
            /*$model->material = $request['Jobcard']['material'];*/
            $model->qty = $request['Jobcard']['qty'];
            $model->class = $request['Jobcard']['class'];
            $model->remark = $request['Jobcard']['remark'];
            $model->created_at = date('Y-m-d H:i:s');
            if ($model->save()) {

                // Checking Product available in prod inventory or not
                $isProdAvail = ProductInventory::find()->where(['product_id' => $model->finish_product_id])->all();
                if($isProdAvail){
                    $isProdAvail->current_qty = $isProdAvail->current_qty + $model->qty;
                    $isProdAvail->save(false);

                } else {
                    // Maintaining Product Inventory
                    $product_inventory = new ProductInventory();
                    $product_inventory->created_at = date('Y-m-d H:i:s');
                    $product_inventory->product_id = $model->finish_product_id;
                    $product_inventory->initial_qty = $model->qty;
                    $product_inventory->current_qty = $model->qty;
                    $product_inventory->min_qty = 0;
                    $product_inventory->note = null;
                    $product_inventory->save(false);

//                    $product_inventory->unit_price = $model->finishProduct;


                }




                if (isset($request['JobcardOperationDetails']) && !empty($request['JobcardOperationDetails'])) {
                    $size = sizeof($request['JobcardOperationDetails']['operation_id']);
                    for ($i = 0; $i < $size; $i++) {
                        $jod = new JobcardOperationDetails();

                        $jod->jobcard_id = $model->jobcard_id;
                        $jod->operation_id = $request['JobcardOperationDetails']['operation_id'][$i];
                        $jod->product_id = $request['JobcardOperationDetails']['product_id'][$i];
                        $jod->qty = $request['JobcardOperationDetails']['qty'][$i];
                        $jod->in_process_qc_no = $request['JobcardOperationDetails']['in_process_qc_no'][$i];
                        $jod->start_from = $request['JobcardOperationDetails']['start_from'][$i];
                        $jod->end_to = $request['JobcardOperationDetails']['end_to'][$i];
                        $jod->m_ch_ve = $request['JobcardOperationDetails']['m_ch_ve'][$i];
                        // $jod->parameter = $request['JobcardOperationDetails']['parameter'][$i];
                        $jod->ok = $request['JobcardOperationDetails']['ok'][$i];
                        $jod->rejected = $request['JobcardOperationDetails']['rejected'][$i];
                        $jod->total = $request['JobcardOperationDetails']['total'][$i];
                        $jod->in_process_qc_no = $request['JobcardOperationDetails']['in_process_qc_no'][$i];
                        $jod->final_qc_no = $request['JobcardOperationDetails']['final_qc_no'][$i];
                        $jod->pressure_test_report_no = $request['JobcardOperationDetails']['pressure_test_report_no'][$i];
                        $jod->operator = $request['JobcardOperationDetails']['operator'][$i];
                        $jod->remark = $request['JobcardOperationDetails']['remark'][$i];

                        if ($jod->save(false)) {
                            /* Storing Job Operation Parameter */
                            if (isset($request['JobcardOperationParameter']) && !empty($request['JobcardOperationParameter'])) {


                                $size = sizeof($request['JobcardOperationParameter']['parameter_id']);
                                for ($i = 0; $i < $size; $i++) {
                                    $jodOperationParam = new JobcardOperationParameter();
                                    $jodOperationParam->jobcard_operation_detail_id = $jod->jobcard_operation_detail_id;
                                    $jodOperationParam->parameter_id = $request['JobcardOperationParameter']['parameter_id'][$i];
                                    $jodOperationParam->product_id = $request['JobcardOperationParameter']['product_id'][$i];
                                    $jodOperationParam->unit = $request['JobcardOperationParameter']['unit'][$i];
                                    $jodOperationParam->instrument_id = $request['JobcardOperationParameter']['instrument_id'][$i];
                                    $jodOperationParam->first_qc_result = $request['JobcardOperationParameter']['first_qc_result'][$i];
                                    $jodOperationParam->second_qc_result = $request['JobcardOperationParameter']['second_qc_result'][$i];
                                    $jodOperationParam->third_qc_result = $request['JobcardOperationParameter']['third_qc_result'][$i];
                                    $jodOperationParam->averages = $request['JobcardOperationParameter']['averages'][$i];

                                    if (!$jodOperationParam->save(false)) {
                                        print_r($jodOperationParam->errors);
                                        exit();
                                    }
                                }
                            }
                        }
                    }
                }


            }


            return $this->redirect(['view', 'id' => $model->jobcard_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jobcard model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->jobcard_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jobcard model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {

        JobcardRawMaterials::deleteAll(['jobcard_id' => $id]);
        JobcardOperationDetails::deleteAll(['jobcard_id' => $id]);

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jobcard model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Jobcard the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Jobcard::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new JobcardRawMaterials();
        return $this->renderAjax('_jobcard_raw_materials', [
            'model' => $model,
            'i' => $i,
        ]);
    }

    public function actionGetOperationForm($i = 0)
    {
        $model = new JobcardOperationDetails();
        return $this->renderAjax('_jobcard_operation_detail', [
            'model' => $model,
            'i' => $i,
        ]);
    }

    public function actionPrintJobcard($id)
    {
        $model = Jobcard::findOne($id);
        $content = $this->renderPartial('_print_jobcard', ['jobcard' => $model]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;
        return $pdf->render();
    }

    public function actionDuplicate($id)
    {

        $oldJobcard = Jobcard::findOne($id);

        $model = new Jobcard();
        $model->date = $oldJobcard->date;
        $model->product_description = $oldJobcard->product_description;
        $model->finish_product_id = $oldJobcard->finish_product_id;
        $model->size = $oldJobcard->size;
        /*$model->material = $request['Jobcard']['material'];*/
        $model->qty = $oldJobcard->qty;
        $model->class = $oldJobcard->class;
        $model->remark = $oldJobcard->remark;
        $model->created_at = date('Y-m-d H:i:s');
        if ($model->save(false)) {
            $isJobcardInserted = true;

            if (!empty($oldJobcard->jobcardOperationDetails)) {
                foreach ($oldJobcard->jobcardOperationDetails as $operation) {
                    $jod = new JobcardOperationDetails();

                    $jod->jobcard_id = $model->jobcard_id;
                    $jod->operation_id = $operation->operation_id;
                    $jod->product_id = $operation->product_id;
                    $jod->qty = $operation->qty;
                    $jod->start_from = $operation->start_from;
                    $jod->end_to = $operation->end_to;
                    $jod->m_ch_ve = $operation->m_ch_ve;
                    // $jod->parameter = $request['JobcardOperationDetails']['parameter'][$i];
                    $jod->ok = $operation->ok;
                    $jod->rejected = $operation->rejected;
                    $jod->total = $operation->total;
                    $jod->in_process_qc_no = $operation->in_process_qc_no;
                    $jod->final_qc_no = $operation->final_qc_no;
                    $jod->pressure_test_report_no = $operation->pressure_test_report_no;
                    $jod->operator = $operation->operator;
                    $jod->remark = $operation->remark;

                    if ($jod->save(false)) {
                        $isJobcardOperationInserted = true;
                        if (!empty($oldJobcard->jobcardOperationParameter)) {
                            /* Storing Job Operation Parameter */
                            foreach ($oldJobcard->jobcardOperationParameter as $parameter) {
                                $isJobcardParameterInserted = true;
                                $jodOperationParam = new JobcardOperationParameter();
                                $jodOperationParam->jobcard_operation_detail_id = $jod->jobcard_operation_detail_id;
                                $jodOperationParam->parameter_id = $parameter->parameter_id;
                                $jodOperationParam->product_id = $parameter->product_id;
                                $jodOperationParam->unit = $parameter->unit;
                                $jodOperationParam->instrument_id = $parameter->instrument_id;
                                $jodOperationParam->first_qc_result = $parameter->first_qc_result;
                                $jodOperationParam->second_qc_result = $parameter->second_qc_result;
                                $jodOperationParam->third_qc_result = $parameter->third_qc_result;
                                $jodOperationParam->averages = $parameter->averages;

                                if (!$jodOperationParam->save(false)) {
                                    p($jodOperationParam->errors);

                                }
                            }
                        }


                    } else {
                        p($jod->errors);
                    }
                }
            }


        } else{
            p($model->errors);
        }

        $this->redirect('index');

    }

    public function actionGetProductParameters($product_id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return Parameters::find()->where(['product_id' => $product_id])->all();
    }

    public function actionGetParameterForm($i = 0)
    {
        $model = new JobcardOperationParameter();
        return $this->renderAjax('_parameter', [
            'model' => $model,
            'i' => $i,
        ]);
    }
}

<?php

namespace app\controllers;

use app\models\JobcardOperationDetails;
use app\models\JobcardOperationParameter;
use app\models\JobcardRawMaterials;
use app\models\Parameters;
use Yii;
use app\models\Jobcard;
use app\models\JobcardSearch;
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
            if($model->save()){


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

    public function actionPrintJobcard($id){
        $model = Jobcard::findOne($id);
        $content = $this->renderPartial('_print_jobcard', ['jobcard' => $model]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;
        return $pdf->render();
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

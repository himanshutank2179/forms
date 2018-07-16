<?php

namespace app\controllers;

use app\models\BomParameter;
use app\models\Parameters;
use Yii;
use app\models\BillOfMaterial;
use app\models\BillOfMaterialSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BillOfMaterialController implements the CRUD actions for BillOfMaterial model.
 */
class BillOfMaterialController extends Controller
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
     * Lists all BillOfMaterial models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BillOfMaterialSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BillOfMaterial model.
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
     * Creates a new BillOfMaterial model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BillOfMaterial();

        if (Yii::$app->request->post()) {
            $request = Yii::$app->request->post();

            $size = sizeof($request['BillOfMaterial']['raw_materia_id']);
            $prodCode = $request['BillOfMaterial']['product_code'];
            for ($i = 0; $i < $size; $i++) {
                $bom = new BillOfMaterial();
                /*echo '<pre>';print_r($request['BillOfMaterial']['product_code']); exit();*/

                $bom->product_code = $request['BillOfMaterial']['product_code'];
                $bom->raw_materia_id = $request['BillOfMaterial']['raw_materia_id'][$i];
                $bom->qty = $request['BillOfMaterial']['qty'][$i];
                $bom->unit_id = (int) $request['BillOfMaterial']['unit_id'][$i];
                $bom->document_id = $request['BillOfMaterial']['document_id'][$i];
                $bom->procuring_by = $request['BillOfMaterial']['procuring_by'][$i];
                $bom->created_at = date('Y-m-d H:i:s');
                if (!$bom->save()) {
                    return print_r($bom->errors);
                }
            }


            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BillOfMaterial model.
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
     * Deletes an existing BillOfMaterial model.
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
     * Finds the BillOfMaterial model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BillOfMaterial the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BillOfMaterial::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new BillOfMaterial();
        return $this->renderAjax('_product-details', [
            'model' => $model,
            'i' => $i,
        ]);
    }
    public function actionGetParameterDetails($id){
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return Parameters::find()->where(['parameter_id'=>$id])->one();
    }
}

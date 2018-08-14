<?php

namespace app\controllers;

use app\models\Parameters;
use app\models\ProductParameters;
use app\models\PurchaseInventory;
use Yii;
use app\models\ProductMaster;
use app\models\ProductMasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductMasterController implements the CRUD actions for ProductMaster model.
 */
class ProductMasterController extends Controller
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
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all ProductMaster models.
     * @return mixed
     */
    public function actionIndex($type = null)
    {
        $searchModel = new ProductMasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductMaster model.
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
     * Creates a new ProductMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductMaster();
        $data = Yii::$app->request->post();

        if ($model->load(Yii::$app->request->post())) {
            $model->created_at = date('Y-m-d H:i:s');


            /*if($model->is_purchase == 1){
                $pInventory = PurchaseInventory::find()->where(['product_sku'=>$model->sku])->one();
                if(empty($pInventory)){
                    $newInventory = new PurchaseInventory();
                    $newInventory->product_id = $model->product_master_id;
                    $newInventory->initial_qty = $model->initialQty;
                    $newInventory->current_qty = $model->initialQty;
                    $newInventory->unit_price = $model->unitPrice;
                    $newInventory->product_sku = $model->sku;
                    $newInventory->created_at = date('Y-m-d H:i:s');
                    $newInventory->save(false);
                } else{
                    $pInventory->current_qty = $pInventory->initial_qty + $model->initialQty;
                }

            } else {

            }*/
            if(!$model->save()){

                print_r($model->errors); exit();
            } else {

                $size = $data['Parameters']['name'];
                // $data['Parameters']['name'];
                // print_r($data);
                // exit();
                $sizecount = sizeof($size);
                for ($i = 0; $i < $sizecount; $i++)
                {
                    $model1 = new Parameters();
                    $model1->product_id = $model->product_master_id;
                    $model1->name = $data['Parameters']['name'][$i];
                    $model1->value = $data['Parameters']['value'][$i];
                    $model1->tolerance = $data['Parameters']['tolerance'][$i];
                    $model1->unit = $data['Parameters']['unit'][$i];
                    if (!$model1->save(false))
                    {
                        print_r($model1->errors);
                        exit();
                    }
                }

            }
            if($model->is_purchase == 1){
                return $this->redirect(['index?type=purchase']);
            }
            return $this->redirect(['index']);

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProductMaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id,$type)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($type == 'purchase'){
                return $this->redirect(['index?type=purchase']);
            } else {
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProductMaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $type)
    {
        $model = $this->findModel($id);
        $model->is_deleted = 1;
        $model->save(false);

        if($type == 'purchase'){
            return $this->redirect(['index?type=purchase']);
        } else {
            return $this->redirect(['index']);
        }

    }

    /**
     * Finds the ProductMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProductMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductMaster::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new Parameters();
        return $this->renderAjax('_parameter', [
            'model' => $model,
            'i' => $i,
        ]);
    }

    public function actionPrint($id)
    {
        $model = ProductMaster::findOne($id);
        $content = $this->renderPartial('_print_product', ['product' => $model]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;
        return $pdf->render();
    }
}

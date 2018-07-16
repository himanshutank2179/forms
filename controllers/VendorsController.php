<?php

namespace app\controllers;

use Yii;
use app\models\Vendors;
use app\models\VendorMobile;
use app\models\VendorsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VendorsController implements the CRUD actions for Vendors model.
 */
class VendorsController extends Controller
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
     * Lists all Vendors models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VendorsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vendors model.
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
     * Creates a new Vendors model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Vendors();

        if ($model->load(Yii::$app->request->post())) {
            $data = Yii::$app->request->post();
            // echo "<pre>";
            // print_r($data);
            // exit();
            if ($model->save()) {
                $size = $data['VendorMobile']['vendor_mobile'];
                $sizecount = sizeof($size);
                for ($i = 0; $i < $sizecount; $i++) {
                    $model1 = new VendorMobile();
                    $model1->vendor_id = $model->vendor_id;
                    $model1->vendor_mobile = $data['VendorMobile']['vendor_mobile'][$i];
                    if (!$model1->save()) {
                        print_r($model1->errors);
                        exit();
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
     * Updates an existing Vendors model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $request = Yii::$app->request->post();
            if ($model->save()) {
                if (isset($request['VendorMobile']['vendor_mobile']) && !empty($request['VendorMobile']['vendor_mobile'])) {
                    \app\models\VendorMobile::deleteAll("vendor_id = '" . $model->vendor_id . "'");
                    $size = $request['VendorMobile']['vendor_mobile'];
                    $sizecount = sizeof($size);
                    for ($i = 0; $i < $sizecount; $i++) {
                        $model1 = new VendorMobile();
                        $model1->vendor_id = $model->vendor_id;
                        $model1->vendor_mobile = $request['VendorMobile']['vendor_mobile'][$i];
                        if (!$model1->save()) {
                            print_r($model1->errors);
                            exit();
                        }
                    }
                }
            } else {
                print_r($model->errors);
                exit();
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Vendors model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        VendorMobile::deleteAll(['vendor_id' => $this->findModel($id)->vendor_id]);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vendors model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vendors the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vendors::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new VendorMobile();
        return $this->renderAjax('_mobile', [
            'model' => $model,
            'i' => $i,
        ]);
    }
}

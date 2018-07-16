<?php

namespace app\controllers;

use app\models\DebitNoteDetails;
use app\models\NonConfirmingProduct;
use app\models\Vendors;
use Yii;
use app\models\DebitNote;
use app\models\DebitNoteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DebitNoteController implements the CRUD actions for DebitNote model.
 */
class DebitNoteController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all DebitNote models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DebitNoteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DebitNote model.
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
     * Creates a new DebitNote model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DebitNote();
        $debit_note_no = rand(pow(10, 6 - 1), pow(10, 6) - 1) . (DebitNote::find()->count() + 1);
        $request = Yii::$app->request->post();
        if ($model->load(Yii::$app->request->post())) {
            $model->created_at = date('Y-m-d H:i:s');
            $model->debit_note_no = $debit_note_no;
            if ($model->save()) {
                $sizeOf = sizeof($request['DebitNoteDetails']['qty']);
                for ($j = 0; $j < $sizeOf; $j++) {
                    $dnd = new DebitNoteDetails();
                    $dnd->qty = $request['DebitNoteDetails']['qty'][$j];
                    $dnd->product_id = $request['DebitNoteDetails']['product_id'][$j];
                    $dnd->uom = $request['DebitNoteDetails']['uom'][$j];
                    $dnd->rate = $request['DebitNoteDetails']['rate'][$j];
                    $dnd->amount = $request['DebitNoteDetails']['amount'][$j];
                    $dnd->debit_note_id = $model->debit_note_id;

                    if (!$dnd->save(false)) {
                        /*echo '<pre>';
                        print_r($dnd->errors);
                        exit();*/
                    } else {
                        /*NonConfirmingProduct::find()->one()*/
                    }
                }
            } else {
                echo '<pre>';
                print_r($model->errors);
                exit();
            }

            return $this->redirect(['index']);
        }

        return $this->render('create', ['model' => $model,]);
    }

    /**
     * Updates an existing DebitNote model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->debit_note_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DebitNote model.
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
     * Finds the DebitNote model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DebitNote the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DebitNote::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new DebitNoteDetails();
        return $this->renderAjax('_details', [
            'model' => $model,
            'i' => rand() .$i,
        ]);
    }

    public function actionGetVendorDetails($id){
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return Vendors::find()->where(['vendor_id' => $id])->one();
    }
}

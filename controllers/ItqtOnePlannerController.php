<?php

namespace app\controllers;

use app\models\ItqtOneAcceptanceCriteria;
use app\models\Parameters;
use Yii;
use app\models\ItqtOnePlanner;
use app\models\ItqtOnePlannerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItqtOnePlannerController implements the CRUD actions for ItqtOnePlanner model.
 */
class ItqtOnePlannerController extends Controller
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
     * Lists all ItqtOnePlanner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItqtOnePlannerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ItqtOnePlanner model.
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
     * Creates a new ItqtOnePlanner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ItqtOnePlanner();
        $request = Yii::$app->request->post();
        if ($model->load(Yii::$app->request->post())) {
            $model->created_at = date('Y-m-t H:i:s');
            if($model->save()){
                if (isset($request['ItqtOneAcceptanceCriteria']) && !empty($request['ItqtOneAcceptanceCriteria'])) {
                    $size = sizeof($request['ItqtOneAcceptanceCriteria']['value']);
                    for ($i = 0; $i < $size; $i++) {
                        $itqtac = new ItqtOneAcceptanceCriteria();
                        $itqtac->value = $request['ItqtOneAcceptanceCriteria']['value'][$i];
                        $itqtac->name = $request['ItqtOneAcceptanceCriteria']['name'][$i];
                        $itqtac->itqt_one_planner_id = $model->itqt_one_planner_id;
                        if (!$itqtac->save()) {
                            print_r($itqtac->errors);
                            exit();
                        }
                    }
                }
            }

            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ItqtOnePlanner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->itqt_one_planner_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ItqtOnePlanner model.
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
     * Finds the ItqtOnePlanner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ItqtOnePlanner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ItqtOnePlanner::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $model = new ItqtOneAcceptanceCriteria();
        return $this->renderAjax('_itqt-one-acceptance-criteria', [
            'model' => $model,
            'i' => $i,
        ]);
    }


    public function actionGetProductParams($product_id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return Parameters::find()->where(['product_id' => $product_id])->all();
    }
}

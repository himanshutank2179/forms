<?php

namespace app\controllers;

use Yii;
use app\models\DocumentsAndDistributionMaster;
use app\models\DocumentsFiles;
use app\models\DocumentsAndDistributionMasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DocumentsAndDistributionMasterController implements the CRUD actions for DocumentsAndDistributionMaster model.
 */
class DocumentsAndDistributionMasterController extends Controller
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
     * Lists all DocumentsAndDistributionMaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocumentsAndDistributionMasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocumentsAndDistributionMaster model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $files = DocumentsFiles::find()->where(['documents_and_distribution_master_id' => $this->findModel($id)->documents_and_distribution_master_id])->all();

        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('view', [
                'model' => $this->findModel($id),
                'files' => $files
            ]);
        } else {
            return $this->render('view', [
                'model' => $this->findModel($id),
                'files' => $files
            ]);
        }

    }

    /**
     * Creates a new DocumentsAndDistributionMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DocumentsAndDistributionMaster();

        $request = Yii::$app->request->bodyParams;

        if ($model->load(Yii::$app->request->post())) {
            // echo '<pre>';
            // print_r($request);
            // exit();
            $model->created_at = date('Y-m-d H:i:s');

            if ($model->save()) {
                if (!empty($_POST['DocumentsAndDistributionMaster']['images'])) {
                    foreach ($_POST['DocumentsAndDistributionMaster']['images'] as $img) {
                        $campaign_image = new DocumentsFiles();
                        $campaign_image->image = $img;
                        $campaign_image->documents_and_distribution_master_id = $model->documents_and_distribution_master_id;
                        $campaign_image->save(false);
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
     * Updates an existing DocumentsAndDistributionMaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if (!empty($_POST['DocumentsAndDistributionMaster']['images'])) {
                DocumentsFiles::deleteAll(['documents_and_distribution_master_id' => $model->documents_and_distribution_master_id]);
                foreach ($_POST['DocumentsAndDistributionMaster']['images'] as $img) {
                    $campaign_image = new DocumentsFiles();
                    $campaign_image->image = $img;
                    $campaign_image->documents_and_distribution_master_id = $model->documents_and_distribution_master_id;
                    $campaign_image->save(false);
                }
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocumentsAndDistributionMaster model.
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
     * Finds the DocumentsAndDistributionMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocumentsAndDistributionMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocumentsAndDistributionMaster::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

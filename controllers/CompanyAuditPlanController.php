<?php

namespace app\controllers;

use app\helpers\AppHelper;
use app\models\AuditElements;
use app\models\AuditNonConfirmities;
use app\models\AuditPlanDocuments;
use app\models\AuditPlanStandard;
use app\models\NonConfirmingProduct;
use Yii;
use app\models\CompanyAuditPlan;
use app\models\CompanyAuditPlanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CompanyAuditPlanController implements the CRUD actions for CompanyAuditPlan model.
 */
class CompanyAuditPlanController extends Controller
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
     * Lists all CompanyAuditPlan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CompanyAuditPlanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CompanyAuditPlan model.
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
     * Creates a new CompanyAuditPlan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {


        $model = CompanyAuditPlan::find()->where(['company_id' => Yii::$app->session->get('company')->company_id])->one();
        if (empty($model)) {
            $model = new CompanyAuditPlan();
        }


        $auditElements = AuditElements::find()->where(['company_id' => Yii::$app->session->get('company')->company_id])->one();
        $nonConf = AuditNonConfirmities::find()->where(['company_id' => Yii::$app->session->get('company')->company_id])->all();
        $auditPlanDocs = AuditPlanDocuments::find()->where(['company_id' => Yii::$app->session->get('company')->company_id])->one();
        $auditPlanStandards = AuditPlanStandard::find()->where(['company_id' => Yii::$app->session->get('company')->company_id])->one();

        $auditNonConfirmities = new AuditNonConfirmities();

        // Adding Elements If Elements is Empty Based On Company
        if (empty($auditElements)) {
            $auditElements = new AuditElements();
            $auditElements->company_id = Yii::$app->session->get('company')->company_id;
            $auditElements->attributes = AppHelper::GetAuditElements();
            $auditElements->company_id = Yii::$app->session->get('company')->company_id;
            $auditElements->save(false);

        }
        // Adding Non Confirming Products is not available based on Company
//        if (empty($auditNonConf)) {
//            $auditNonConf = new AuditNonConfirmities();
//            $auditNonConf->company_id = Yii::$app->session->get('company')->company_id;
//            $auditNonConf->save(false);
//        }

        // Adding Audit Plan Docs if not available based on company
        if (empty($auditPlanDocs)) {
            foreach (AppHelper::GetAuditDocuments() as $key => $document) {

                $auditPlanDocs = new AuditPlanDocuments();
                $auditPlanDocs->company_id = Yii::$app->session->get('company')->company_id;
                $auditPlanDocs->document_name = $document[0];
                $auditPlanDocs->document_no = $document[1];
                $auditPlanDocs->reviewed = 0;
                $auditPlanDocs->save(false);
            }

        }


        // Adding Audit Plan Standards if not available based on company
        if (empty($auditPlanStandards)) {
            $auditPlanStandards = new AuditPlanStandard();
            $auditPlanStandards->company_id = Yii::$app->session->get('company')->company_id;
            $auditPlanStandards->save(false);
        }

        if ($model->load(Yii::$app->request->post())) {
            if ($model->isNewRecord) {
                $model->created_at = date('Y-m-d h:i:s');
            }
            $model->save();
            if (Yii::$app->request->isAjax) {
                return 1;
            } else {
                return $this->redirect(['index']);
            }

        }

        if ($auditPlanStandards->load(Yii::$app->request->post())) {

            $auditPlanStandards->save();
            if (Yii::$app->request->isAjax) {
                return 1;
            }

        }

        if ($auditElements->load(Yii::$app->request->post())) {

            $auditElements->save();
            if (Yii::$app->request->isAjax) {
                return 1;
            }

        }


        $request = Yii::$app->request->post();


        if (isset($request['AuditPlanDocuments']) && !empty($request['AuditPlanDocuments'])) {
            AuditPlanDocuments::deleteAll(['company_id' => Yii::$app->session->get('company')->company_id]);
            $size = sizeof($request['AuditPlanDocuments']['document_name']);
            for ($i = 0; $i < $size; $i++) {
                $auditPD = new AuditPlanDocuments();
                $auditPD->company_id = Yii::$app->session->get('company')->company_id;
                $auditPD->document_name = $request['AuditPlanDocuments']['document_name'][$i];
                $auditPD->document_no = $request['AuditPlanDocuments']['document_no'][$i];
                $auditPD->reviewed = $request['AuditPlanDocuments']['reviewed'][$i];
                $auditPD->save();

            }
            if (Yii::$app->request->isAjax) {
                return 1;
            }
        }


        // Storing Audit Non COnformities
        if (isset($request['AuditNonConfirmities']) && !empty($request['AuditNonConfirmities'])) {
            AuditNonConfirmities::deleteAll(['company_id' => Yii::$app->session->get('company')->company_id]);
            $size = sizeof($request['AuditNonConfirmities']['design_dev']);
            for ($i = 0; $i < $size; $i++) {

                $nonConfm = new AuditNonConfirmities();
                $nonConfm->company_id = Yii::$app->session->get('company')->company_id;
                $nonConfm->design_dev = $request['AuditNonConfirmities']['design_dev'][$i];
                $nonConfm->non_confirmitie = $request['AuditNonConfirmities']['non_confirmitie'][$i];
                $nonConfm->non_confirming_class = $request['AuditNonConfirmities']['non_confirming_class'][$i];
                $nonConfm->save();

            }
            if (Yii::$app->request->isAjax) {
                return 1;
            }
        }

        return $this->render('create', [
            'model' => $model,
            'auditPlanStandards' => $auditPlanStandards,
            'auditElements' => $auditElements,
            'auditPlanDocuments' => $auditPlanDocs,
            'nonConf' => $nonConf,
            'auditNonConfirmities' => $auditNonConfirmities,
        ]);
    }

    /**
     * Updates an existing CompanyAuditPlan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->company_audit_plan_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CompanyAuditPlan model.
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
     * Finds the CompanyAuditPlan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CompanyAuditPlan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CompanyAuditPlan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionGetFloatForm($i = 0)
    {
        $auditPlanDocuments = new AuditPlanDocuments();
        return $this->renderAjax('_document', [
            'auditPlanDocuments' => $auditPlanDocuments,
            'i' => $i . rand(),
        ]);
    }

    public function actionRemoveDbForm($id)
    {
        $res = AuditPlanDocuments::deleteAll(['audit_plan_document_id' => $id]);
        if ($res) {
            return 1;
        } else {
            return 0;
        }
    }

    public function actionRemoveNonConf($id)
    {
        $res = AuditNonConfirmities::deleteAll(['audit_non_confirmities_id' => $id]);
        if ($res) {
            return 1;
        } else {
            return 0;
        }
    }

    public function actionGetNonConfFloatForm($i = 0)
    {
        $auditNonConfirmities = new AuditNonConfirmities();
        return $this->renderAjax('_non_conf', [
            'auditNonConfirmities' => $auditNonConfirmities,
            'i' => $i . rand(),
        ]);
    }

    public function actionPrint()
    {
        $model = CompanyAuditPlan::find()->where(['company_id' => Yii::$app->session->get('company')->company_id])->one();
        $content = $this->renderPartial('_print', ['auditplan' => $model]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;
        return $pdf->render();
    }
}

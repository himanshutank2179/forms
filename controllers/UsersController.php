<?php

namespace app\controllers;

use Yii;
use app\models\Users;
use app\models\UsersSearch;
use app\models\EmployeeResponsibility;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller
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
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Users model.
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

    public function actionEmpInfo($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $this->findModel($id);
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Users();

        if ($model->load(Yii::$app->request->post())) {

            $model->created_at = date('Y-m-d H:i:s');
            $model->username = substr($model->name, 0, 3) . rand(111111, 999999);
            $model->password = Yii::$app->security->generatePasswordHash($model->password);
            if ($model->save()) {
                if (isset($_POST['Users']['responsibility_id']) && !empty($_POST['Users']['responsibility_id'])) {

                    $reslist = $_POST['Users']['responsibility_id'];
                    $size = sizeof($reslist);
                    for ($i = 0; $i < $size; $i++) {
                        $rl = new EmployeeResponsibility();
                        $rl->responsibility_id = $reslist[$i];
                        $rl->user_id = $model->user_id;
                        $rl->save();

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
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        /*echo '<pre>';
        print_r(Yii::$app->request->post());
        exit();*/
        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            EmployeeResponsibility::deleteAll(['user_id' => $model->user_id]);
            if (isset($_POST['Users']['responsibility_id']) && !empty($_POST['Users']['responsibility_id'])) {

                $reslist = $_POST['Users']['responsibility_id'];
                $size = sizeof($reslist);
                for ($i = 0; $i < $size; $i++) {
                    $rl = new EmployeeResponsibility();
                    $rl->responsibility_id = $reslist[$i];
                    $rl->user_id = $model->user_id;
                    $rl->save();

                }
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->is_deleted = 1;
        if ($model->save()) {
            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionPrint($id)
    {
        $model = Users::findOne($id);
        $content = $this->renderPartial('_print_user', ['emp' => $model]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;
        return $pdf->render();
    }
}

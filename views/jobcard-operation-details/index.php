<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\JobcardOperationDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobcard Operation Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobcard-operation-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jobcard Operation Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jobcard_operation_detail_id',
            'jobcard_id',
            'operation_id',
            'start_from',
            'end_to',
            //'m_ch_ve',
            //'parameter',
            //'ok',
            //'rejected',
            //'total',
            //'in_process_qc_no',
            //'final_qc_no',
            //'pressure_test_report_no',
            //'operator',
            //'remark:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

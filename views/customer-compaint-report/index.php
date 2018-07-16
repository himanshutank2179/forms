<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerCompaintReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Complaint Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-compaint-report-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Complaint Report', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           /* 'customer_compaint_report_id',*/
            'customer_compaint_id',
            'date',
            'date_of_receipt_of_compliant',
            'received_by',
            //'made_of_receipt',
            //'customer_id',
            //'product_id',
            //'incomming_qc_no',
            //'date_of_dispatch',
            //'invoice_no',
            //'compaint_desc:ntext',
            //'compaint_nature',
            //'report_of_work:ntext',
            //'corrective_action:ntext',
            //'taken_action_result:ntext',
            //'proposed_action:ntext',
            //'analysed_by',
            //'closed_by',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

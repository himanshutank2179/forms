<?php

use kartik\export\ExportMenu;
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

    <?php
    $gridColumns = [
        /* 'customer_compaint_report_id',*/
        'customer_compaint_id',
        'date',
        'date_of_receipt_of_compliant',
        'received_by',
        'made_of_receipt',
        'customer_id',
        'product_id',
        'incomming_qc_no',
        'date_of_dispatch',
        'invoice_no',
        'compaint_desc:ntext',
        'compaint_nature',
        'report_of_work:ntext',
        'corrective_action:ntext',
        'taken_action_result:ntext',
        'proposed_action:ntext',
        'analysed_by',
        'closed_by',
        //'created_at',




    ];
    ?>

    <?=
    ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'fontAwesome' => true,
        'filename' => 'Order_Conformation_REPORT',
        'exportConfig' => [
            ExportMenu::FORMAT_TEXT => false,
            ExportMenu::FORMAT_CSV => false,
            ExportMenu::FORMAT_HTML => false,
            ExportMenu::FORMAT_EXCEL_X => false
        ],
    ]);
    ?>

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

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print-complaint', 'id' => $model->customer_compaint_report_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderQuotationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$type = Yii::$app->getRequest()->getQueryParam('type');
if ($type == 'requirements') {
    $this->title = 'Customer Requirements';
    $this->params['breadcrumbs'][] = $this->title;
} else {
    $this->title = 'Order Quotations';
    $this->params['breadcrumbs'][] = $this->title;
}

?>
<div class="order-quotation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create', ['create?type=' . $type], ['class' => 'btn btn-success']) ?>
    </p>


    <?php
    $gridColumns = [
        /*'order_quotation_id',*/
        'inquiry_date',
        'inquiry_number',
        'delivery_period',
        'our_quote_ref_num',
        'mod_of_dispatch',
        //'payment_terms',
        //'inasurance',
        //'inspection_by',
        //'approved_by',
        //'is_deleted',
        //'created_at',

        // ['class' => 'yii\grid\ActionColumn'],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} {print}',
            'buttons' => [
                'update' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', \yii\helpers\Url::to(['update', 'id' => $model->order_quotation_id, 'type' => Yii::$app->getRequest()->getQueryParam('type')]), []);
                },
                'print' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print-orderquotation', 'id' => $model->order_quotation_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                },
            ],
        ]
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

            /*'order_quotation_id',*/
            'inquiry_date',
            'inquiry_number',
            'delivery_period',
            'our_quote_ref_num',
            'mod_of_dispatch',
            //'payment_terms',
            //'inasurance',
            //'inspection_by',
            //'approved_by',
            //'is_deleted',
            //'created_at',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', \yii\helpers\Url::to(['update', 'id' => $model->order_quotation_id, 'type' => Yii::$app->getRequest()->getQueryParam('type')]), []);
                    },
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print-orderquotation', 'id' => $model->order_quotation_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

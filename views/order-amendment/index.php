<?php

use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderAmendmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Amendments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-amendment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Amendment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $gridColumns = [
        /*'order_amendment_id',*/
        'purchase_order_no',
        'date',
        'quotation_ref_no',
        'revised_terms:ntext',
        'total',
        'delivery_period',
        'delivery_required_at',
        'made_of_dispatch',
        'payment_terms:ntext',
        'insurance',
        'inspected_by',
        'approved_by',
        //'is_deleted',




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

            /*'order_amendment_id',*/
            'purchase_order_no',
            'date',
            'quotation_ref_no',
            'revised_terms:ntext',
            //'total',
            //'delivery_period',
            //'delivery_required_at',
            //'made_of_dispatch',
            //'payment_terms:ntext',
            //'insurance',
            //'inspected_by',
            //'approved_by',
            //'is_deleted',
            //'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->order_amendment_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>



</div>

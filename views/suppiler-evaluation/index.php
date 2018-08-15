<?php

use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuppilerEvaluationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppiler Evaluations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppiler-evaluation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Suppiler Evaluation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $gridColumns = [
        [
            'attribute' => 'vendor_id',
            'value' => function ($data) {
                return !empty($data->vendor->name) ? $data->vendor->name : 'N/A';
            },
        ],
        'month',
        'total_po',
        'purchase_qty',
        'value',
        'on_time_delevery:datetime',
        'current_lot_size',
        'total_supplied',
        'accepted',
        'rejected',
        'first_performance',
        'second_performance',
        'third_performance',
        'total_marks',
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

//            'sppiler_evaluation_id',

            [
                'attribute' => 'vendor_id',
                'value' => function ($data) {
                    return !empty($data->vendor->name) ? $data->vendor->name : 'N/A';
                },
            ],
            'month',
            'total_po',
            'purchase_qty',
            //'value',
            //'on_time_delevery:datetime',
            //'current_lot_size',
            //'total_supplied',
            //'accepted',
            //'rejected',
            //'first_performance',
            //'second_performance',
            //'third_performance',
            //'total_marks',
            //'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->sppiler_evaluation_id]), ['target' => '_blank', 'data-pjax' => "0", 'title' => 'Print']);
                    },

                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

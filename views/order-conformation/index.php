<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderConformationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Conformations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-conformation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Conformation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php 

        $gridColumns = [
            // 'order_conformation_id',
            // 'client_id',
            [
                'attribute'=>'client_id',
                'label'=>'Client Name',
                'vAlign'=>'middle',
                'width'=>'190px',
                'value'=>function ($model, $key, $index, $widget) { 
                    return Html::a($model->client->name, '#', []);
                },
                'format'=>'raw'
            ],
            'order_number',
            'inquiry_date',
            'delivery_period',
            'our_quote_ref_num',
            'mod_of_dispatch',
            'payment_terms',
            'inasurance',
            'inspection_by',
            // 'approved_by',
            [
                'attribute'=>'approved_by',
                'label'=>'Approved By',
                'vAlign'=>'middle',
                'width'=>'190px',
                'value'=>function ($model, $key, $index, $widget) { 
                    return Html::a($model->approvedBy->name, '#', []);
                },
                'format'=>'raw'
            ],
            // 'city_id',
            [
                'attribute'=>'city_id',
                'label'=>'City',
                'vAlign'=>'middle',
                'width'=>'190px',
                'value'=>function ($model, $key, $index, $widget) { 
                    return Html::a($model->city->name, '#', []);
                },
                'format'=>'raw'
            ],
            // 'state_id',
            [
                'attribute'=>'state_id',
                'label'=>'State',
                'vAlign'=>'middle',
                'width'=>'190px',
                'value'=>function ($model, $key, $index, $widget) { 
                    return Html::a($model->state->name, '#', []);
                },
                'format'=>'raw'
            ],
            
            
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
                            ExportMenu::FORMAT_HTML => false
                        ],
        ]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'order_conformation_id',*/
            'order_number',
            'inquiry_date',
            'delivery_period',
            'our_quote_ref_num',
            //'mod_of_dispatch',
            //'payment_terms',
            //'inasurance',
            //'inspection_by',
            //'approved_by',
            //'is_deleted',
            //'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->order_conformation_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

<?php

use app\models\Clients;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Work Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Work Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'work_order_id',

            [
                'attribute'=>'customer_id',
                'value'=>function($model){
                    return !empty(Clients::findOne($model->customer_id)->name) ? Clients::findOne($model->customer_id)->name : '';
                }
            ],
            'date',
            'production_monitoring',
            'approved_by',
            //'created_at',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print-work-order', 'id' => $model->work_order_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

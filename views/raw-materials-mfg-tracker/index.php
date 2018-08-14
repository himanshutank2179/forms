<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RawMaterialsMfgTrackerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Raw Materials Mfg Trackers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raw-materials-mfg-tracker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Raw Materials Mfg Tracker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'raw_materials_mfg_tracker_id',
            'product_id',*/
            [
                'attribute' => 'product_id',
                'value' => 'product.product_name'
            ],
            'starting_inventory',
            're_order_point',
            'purchases',
            //'available_now',
            //'to_order',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->raw_materials_mfg_tracker_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

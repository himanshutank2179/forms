<?php

use app\helpers\AppHelper;
use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PurchaseInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Purchase Inventory';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-inventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php Html::a('Create Raw Material Inventory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php
    $gridColumns = [
        [
            'attribute' => 'product_id',
            'value' => function ($model) {
                return !empty($model->product->product_name) ? $model->product->product_name : '';
            },

        ],
        'product_sku',
        'initial_qty',
        'current_qty',
        'unit_price',
        'note:ntext',
    ];
    ?>

    <?=
    ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'fontAwesome' => true,
        'filename' => 'purchase_inventory',
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

            /*'inventory_id',*/
            [
                'attribute' => 'product_id',
                'value' => function ($model) {
                    return $model->product->product_name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'product_id', AppHelper::getRawMaterials(), ['class' => 'form-control select', 'prompt' => 'Filter By Product']),
            ],
            'product_sku',
            'initial_qty',
            'current_qty',
            'unit_price',
            'note:ntext',
            'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->inventory_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

<?php

use app\helpers\AppHelper;
use kartik\export\ExportMenu;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PurchaseOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Purchase Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-order-index">


    <?php Pjax::begin(['id' => 'pjax-grid-view-po']); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Purchase Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $gridColumns = [
        /*'purchase_order_id',*/
        [
            'attribute' => 'product_id',
            'value' => function ($model) {
                return $model->product->product_name;
            },

        ],
        [
            'attribute' => 'vendor_id',
            'value' => function ($model) {
                return $model->vendor->name;
            },

        ],
        'po_no',
        'qty',
        'unit_price',
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


    <hr>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'purchase_order_id',*/
            [
                'attribute' => 'product_id',
                'value' => function ($model) {
                    return $model->product->product_name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'product_id', AppHelper::getRawMaterials(), ['class' => 'form-control select4', 'prompt' => 'Filter By Product']),
            ],
            [
                'attribute' => 'vendor_id',
                'value' => function ($model) {
                    return $model->vendor->name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'vendor_id', AppHelper::getVendors(), ['class' => 'form-control select4', 'prompt' => 'Filter By Vendor']),
            ],
            'po_no',
            'qty',
            //'unit_price',
            //'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->purchase_order_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);
?>

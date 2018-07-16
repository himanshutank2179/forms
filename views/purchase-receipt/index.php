<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PurchaseReceiptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Raw Material Receipts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-receipt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Raw Material Receipt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*  'purchase_receipt_id',*/
            'GRN_NO',
            [
                'attribute'=>'product_id',
                'value'=>function($model){
                    return $model->product->product_name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'product_id', AppHelper::getRawMaterials(), ['class' => 'form-control select','prompt' => 'Filter By Product']),
            ],
            'unit',
            'receive_qty',
            'rejected_qty',
            'accepted_qty',
            'unit_price',
            'order_no',
            'cgst',
            'sgst',
            'igst',
            'total_amount',
            'remark:ntext',
            [
                'attribute' => 'is_approved',
                'format'=>'raw',
                'value' => function ($model) {

                    if($model->is_approved == 0){
                        return '<span class="label label-danger">No</span>';
                    } else if($model->is_approved == 1){
                        return '<span class="label label-success">YES</span>';
                    } else if($model->is_approved == 2){
                        return '<span class="label label-warning">Waiting For QC</span>';
                    }

                    /* return ($model->is_approved == 1) ? '<span class="label label-success">YES</span>' : '<span class="label label-danger">NO</span>';*/
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

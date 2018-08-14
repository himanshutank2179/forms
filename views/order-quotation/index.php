<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderQuotationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Quotations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-quotation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Quotation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'order_quotation_id',*/
            'inquiry_date',
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
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print-orderquotation', 'id' => $model->order_quotation_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

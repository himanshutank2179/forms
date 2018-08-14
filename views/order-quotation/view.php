<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrderQuotation */

$this->title = 'Order Quotation';
$this->params['breadcrumbs'][] = ['label' => 'Order Quotations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-quotation-view">

    <h3>Order Quotation</h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_quotation_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_quotation_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print-orderquotation', 'id' => $model->order_quotation_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'order_quotation_id',
            'inquiry_date',
            'delivery_period',
            'our_quote_ref_num',
            'mod_of_dispatch',
            'payment_terms',
            'inasurance',
            // 'inspection_by',
            // 'approved_by',
            [
                'attribute' => 'inspection_by',
                'value' => function ($model) {
                    return $model->inspectionBy->name;
                }
            ],
            [
                'attribute' => 'approved_by',
                'value' => function ($model) {
                    return $model->approvedBy->name;
                }
            ],

            // 'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

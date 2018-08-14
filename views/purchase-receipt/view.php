<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseReceipt */

$this->title = 'Raw Material Receipt';
$this->params['breadcrumbs'][] = ['label' => 'Raw Material Receipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-receipt-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->purchase_receipt_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->purchase_receipt_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->purchase_receipt_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'purchase_receipt_id',
            'GRN_NO',
            // 'product_id',
            [
                'attribute' => 'product_id',
                'value' => function ($data) {
                return $data->product->product_name;
                },
                'filter' => false
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
        ],
    ]) ?>

</div>

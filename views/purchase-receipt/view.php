<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseReceipt */

$this->title = $model->purchase_receipt_id;
$this->params['breadcrumbs'][] = ['label' => 'Raw Material Receipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-receipt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->purchase_receipt_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->purchase_receipt_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'purchase_receipt_id',
            'GRN_NO',
            'product_id',
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

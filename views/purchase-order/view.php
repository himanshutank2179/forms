<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseOrder */

$this->title = 'Purchase Order';
$this->params['breadcrumbs'][] = ['label' => 'Purchase Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-order-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->purchase_order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->purchase_order_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->purchase_order_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'purchase_order_id',
            // 'product_id',
            // 'vendor_id',
            [
                'attribute' => 'product_id',
                'value' => function ($data) {
                return $data->product->product_name;
                },
                'filter' => false
            ],
            [
                'attribute' => 'vendor_id',
                'value' => function ($data) {
                return $data->vendor->name;
                },
                'filter' => false
            ],
            'po_no',
            'qty',
            'unit_price',
            'created_at',
        ],
    ]) ?>

</div>

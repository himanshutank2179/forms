<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseInventory */

$this->title = 'Raw Materials Inventory';
$this->params['breadcrumbs'][] = ['label' => 'Raw Materials Inventory', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-inventory-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->inventory_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->inventory_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->inventory_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'inventory_id',
            // 'product_id',
            [
                'attribute' => 'product_id',
                'value' => function ($data) {
                return $data->product->product_name;
                },
                'filter' => false
            ],
            'initial_qty',
            'current_qty',
            'unit_price',
            'note:ntext',
            // 'created_at',
        ],
    ]) ?>

</div>

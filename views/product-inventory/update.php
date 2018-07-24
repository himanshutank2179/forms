<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductInventory */

$this->title = 'Update Product Inventory: ' . $model->product_inventory_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_inventory_id, 'url' => ['view', 'id' => $model->product_inventory_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-inventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

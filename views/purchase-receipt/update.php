<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseReceipt */

$this->title = 'Update Raw Material Receipt';
$this->params['breadcrumbs'][] = ['label' => 'Raw Material Receipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->purchase_receipt_id, 'url' => ['view', 'id' => $model->purchase_receipt_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="purchase-receipt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

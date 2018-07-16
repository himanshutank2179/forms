<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrderQuotation */

$this->title = 'Update Order Quotation: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Order Quotations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_quotation_id, 'url' => ['view', 'id' => $model->order_quotation_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-quotation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

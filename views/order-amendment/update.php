<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrderAmendment */

$this->title = 'Update Order Amendment: ' . $model->order_amendment_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Amendments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_amendment_id, 'url' => ['view', 'id' => $model->order_amendment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-amendment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

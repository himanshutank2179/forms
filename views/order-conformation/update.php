<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrderConformation */

$this->title = 'Update Order Conformation: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Order Conformations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_conformation_id, 'url' => ['view', 'id' => $model->order_conformation_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-conformation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

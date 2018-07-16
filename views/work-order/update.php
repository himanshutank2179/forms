<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WorkOrder */

$this->title = 'Update Work Order: ' . $model->work_order_id;
$this->params['breadcrumbs'][] = ['label' => 'Work Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->work_order_id, 'url' => ['view', 'id' => $model->work_order_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="work-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

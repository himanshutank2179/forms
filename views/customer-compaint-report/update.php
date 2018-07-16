<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerCompaintReport */

$this->title = 'Update Customer Compaint Report: ' . $model->customer_compaint_report_id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Compaint Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->customer_compaint_report_id, 'url' => ['view', 'id' => $model->customer_compaint_report_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-compaint-report-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerComplaintRecord */

$this->title = 'Update Customer Complaint Record: ' . $model->customer_complaint_record_id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Complaint Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->customer_complaint_record_id, 'url' => ['view', 'id' => $model->customer_complaint_record_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-complaint-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

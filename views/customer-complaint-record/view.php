<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerComplaintRecord */

$this->title = $model->customer_complaint_record_id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Complaint Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-complaint-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->customer_complaint_record_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->customer_complaint_record_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            /*'customer_complaint_record_id',*/
            'date',
            'customer_name',
            'customer_address',
            'reference',
            'type_of_complaint',
            'product_name',
            'c_responsibility',
            'c_cataken',
            'c_sign',
            'p_responsibility',
            'p_cataken',
            'p_sign',
        ],
    ]) ?>

</div>

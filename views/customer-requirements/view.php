<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerRequirements */

$this->title = $model->customer_requirement_id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Requirements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-requirements-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->customer_requirement_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->customer_requirement_id], [
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
            //'customer_requirement_id',
            'date',
            'client_id',
            'address:ntext',
            'product_info:ntext',
            'quatation',
            'quatation_ref',
            'customer_po_number',
            'order_review_by',
            'date_of_dispatch',
            'item',
            'invoice_number',
            'created_at',
            'is_deleted',
        ],
    ]) ?>

</div>

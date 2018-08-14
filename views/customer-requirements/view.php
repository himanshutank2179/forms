<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerRequirements */

$this->title = 'Customer Requirements';
$this->params['breadcrumbs'][] = ['label' => 'Customer Requirements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-requirements-view">

    <h3>Customer Requirements</h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->customer_requirement_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->customer_requirement_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->customer_requirement_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'customer_requirement_id',
            'date',
            // 'client_id',
            [
                'attribute' => 'client_id',
                'value' => function ($model) {
                    return $model->client->name;
                }
            ],
            'address:ntext',
            'product_info:ntext',
            'quatation',
            'quatation_ref',
            'customer_po_number',
            // 'order_review_by',
            [
                'attribute' => 'order_review_by',
                'value' => function ($model) {
                    return $model->orderReviewBy->name;
                }
            ],
            'date_of_dispatch',
            'item',
            'invoice_number',
            'created_at',
            // 'is_deleted',
        ],
    ]) ?>

</div>

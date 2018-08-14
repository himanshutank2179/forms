<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrderConformation */

$this->title = 'Order Conformation';
$this->params['breadcrumbs'][] = ['label' => 'Order Conformations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-conformation-view">

    <h3>Order Conformation</h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_conformation_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_conformation_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->order_conformation_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'order_conformation_id',
            'order_number',
            'inquiry_date',
            'delivery_period',
            'our_quote_ref_num',
            'mod_of_dispatch',
            'payment_terms',
            'inasurance',
            'inspection_by',
            // 'approved_by',
            [
                'attribute' => 'approved_by',
                'value' => function ($model) {
                    return $model->approvedBy->name;
                }
            ],
            // 'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrderQuotation */

$this->title = $model->order_quotation_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Quotations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-quotation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_quotation_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_quotation_id], [
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
            'order_quotation_id',
            'inquiry_date',
            'delivery_period',
            'our_quote_ref_num',
            'mod_of_dispatch',
            'payment_terms',
            'inasurance',
            'inspection_by',
            'approved_by',

            'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

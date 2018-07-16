<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrderMfgTracker */

$this->title = $model->order_mfg_tracker_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Mfg Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-mfg-tracker-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_mfg_tracker_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_mfg_tracker_id], [
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
            'order_mfg_tracker_id',
            'order_number',
            'order_type',
            'order_date',
            'expected_date',
            'product_id',
            'qty',
            'notes:ntext',
            'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

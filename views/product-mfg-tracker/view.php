<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductMfgTracker */

$this->title = 'Product Mfg Tracker';
$this->params['breadcrumbs'][] = ['label' => 'Product Mfg Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-mfg-tracker-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_mfg_tracker_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_mfg_tracker_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->product_mfg_tracker_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'product_mfg_tracker_id',
            [
                'attribute' => 'product_id',

                'value' => function ($data) {
                    return $data->product->product_name;
                },

            ],
            'qty',
        ],
    ]) ?>

</div>

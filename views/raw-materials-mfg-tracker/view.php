<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RawMaterialsMfgTracker */

$this->title = 'Raw Materials Mfg Tracker';
$this->params['breadcrumbs'][] = ['label' => 'Raw Materials Mfg Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raw-materials-mfg-tracker-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->raw_materials_mfg_tracker_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->raw_materials_mfg_tracker_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->raw_materials_mfg_tracker_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'raw_materials_mfg_tracker_id',
            [
                'attribute' => 'product_id',
                'value' => function ($data) {
                    return $data->product->product_name;
                },
            ],
            'starting_inventory',
            're_order_point',
            'purchases',
            'available_now',
            'to_order',
        ],
    ]) ?>

</div>

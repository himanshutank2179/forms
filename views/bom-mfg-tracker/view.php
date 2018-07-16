<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BomMfgTracker */

$this->title = $model->bom_mfg_tracker_id;
$this->params['breadcrumbs'][] = ['label' => 'Bom Mfg Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bom-mfg-tracker-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bom_mfg_tracker_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bom_mfg_tracker_id], [
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
            'bom_mfg_tracker_id',
            'product_id',
            'raw_material_id',
            'units',
            'unit_of_measure_id',
            'raw_material_units_used_till_now',
            'available_raw_material',
            'products_made',
            'id_deleted',
            'created_at',
        ],
    ]) ?>

</div>

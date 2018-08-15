<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SuppilerEvaluation */

$this->title = 'Suppiler Evaluation';
$this->params['breadcrumbs'][] = ['label' => 'Suppiler Evaluations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppiler-evaluation-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->sppiler_evaluation_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->sppiler_evaluation_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->sppiler_evaluation_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'sppiler_evaluation_id',
            // 'vendor_id',
            [
                'attribute' => 'vendor_id',
                'value' => function ($data) {
                    return $data->vendor->name;
                },
            ],
            'month',
            'total_po',
            'purchase_qty',
            'value',
            'on_time_delevery:datetime',
            'current_lot_size',
            'total_supplied',
            'accepted',
            'rejected',
            'first_performance',
            'second_performance',
            'third_performance',
            'total_marks',
            // 'created_at',
        ],
    ]) ?>

</div>

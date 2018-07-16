<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InspectionPlaner */

$this->title = $model->inspection_planer_id;
$this->params['breadcrumbs'][] = ['label' => 'Inspection Planers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspection-planer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->inspection_planer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->inspection_planer_id], [
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
            'inspection_planer_id',
            'product_id',
            'process_id',
            'parameter_id',
            'tolerance',
            'inspection_stage',
            'sampling_plan',
            'test_method',
            'inspected_by',
            'approved_by',
            'record',
            'created_at',
        ],
    ]) ?>

</div>

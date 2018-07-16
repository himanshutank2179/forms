<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InstrumentMaster */

$this->title = $model->instrument_master_id;
$this->params['breadcrumbs'][] = ['label' => 'Instrument Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instrument-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->instrument_master_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->instrument_master_id], [
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
            'instrument_master_id',
            'name_of_instrument',
            'instrument_identification_no',
            'make_and_sr_no',
            'capacity',
            'least_count',
            'acceptance_criteria',
            'calibration_certi_no',
            'date',
            'next_due_on',
            'sign_qc',
            'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

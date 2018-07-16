<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InstrumentMaster */

$this->title = 'Update Instrument Master: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Instrument Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->instrument_master_id, 'url' => ['view', 'id' => $model->instrument_master_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="instrument-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

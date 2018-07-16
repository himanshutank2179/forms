<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BomMfgTracker */

$this->title = 'Update Bom Mfg Tracker: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Bom Mfg Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bom_mfg_tracker_id, 'url' => ['view', 'id' => $model->bom_mfg_tracker_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bom-mfg-tracker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

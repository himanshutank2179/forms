<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RawMaterialsMfgTracker */

$this->title = 'Update Raw Materials Mfg Tracker: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Raw Materials Mfg Trackers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->raw_materials_mfg_tracker_id, 'url' => ['view', 'id' => $model->raw_materials_mfg_tracker_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="raw-materials-mfg-tracker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

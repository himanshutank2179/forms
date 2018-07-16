<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InspectionPlaner */

$this->title = 'Update Inspection Planer: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Inspection Planers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inspection_planer_id, 'url' => ['view', 'id' => $model->inspection_planer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inspection-planer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

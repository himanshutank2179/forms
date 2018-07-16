<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnitsOfMeasures */

$this->title = 'Update Units Of Measures: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Units Of Measures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->units_of_measures_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="units-of-measures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

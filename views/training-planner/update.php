<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrainingPlanner */

$this->title = 'Update Training Planner: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Training Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->training_planner_id, 'url' => ['view', 'id' => $model->training_planner_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="training-planner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

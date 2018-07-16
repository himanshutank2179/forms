<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItqtTwoPlanner */

$this->title = 'Update Itqt Two Planner: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Itqt Two Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->itqt_two_planner_id, 'url' => ['view', 'id' => $model->itqt_two_planner_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="itqt-two-planner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

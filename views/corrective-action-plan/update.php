<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CorrectiveActionPlan */

$this->title = 'Update Corrective Action Plan: ' . $model->corrective_action_plan_id;
$this->params['breadcrumbs'][] = ['label' => 'Corrective Action Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->corrective_action_plan_id, 'url' => ['view', 'id' => $model->corrective_action_plan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="corrective-action-plan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

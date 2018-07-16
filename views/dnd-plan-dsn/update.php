<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DndPlanDsn */

$this->title = 'Update Dnd Plan Dsn: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Dnd Plan Dsns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dnd_plan_dsn_id, 'url' => ['view', 'id' => $model->dnd_plan_dsn_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dnd-plan-dsn-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

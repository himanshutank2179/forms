<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuditPlanStandard */

$this->title = 'Update Audit Plan Standard: ' . $model->audit_plan_standard_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Plan Standards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->audit_plan_standard_id, 'url' => ['view', 'id' => $model->audit_plan_standard_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-plan-standard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

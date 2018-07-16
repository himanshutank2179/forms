<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CompanyAuditPlan */

$this->title = 'Update Company Audit Plan: ' . $model->company_audit_plan_id;
$this->params['breadcrumbs'][] = ['label' => 'Company Audit Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->company_audit_plan_id, 'url' => ['view', 'id' => $model->company_audit_plan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="company-audit-plan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

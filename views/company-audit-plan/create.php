<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CompanyAuditPlan */

$this->title = 'Create Company Audit Plan';
$this->params['breadcrumbs'][] = ['label' => 'Company Audit Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-audit-plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'auditPlanStandards' => $auditPlanStandards,
        'auditElements' => $auditElements,
        'auditPlanDocuments' => $auditPlanDocuments,
        'auditNonConfirmities' => $auditNonConfirmities,
        'nonConf' => $nonConf,
    ]) ?>

</div>

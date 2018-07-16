<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuditPlanDocuments */

$this->title = 'Update Audit Plan Documents: ' . $model->audit_plan_document_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Plan Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->audit_plan_document_id, 'url' => ['view', 'id' => $model->audit_plan_document_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-plan-documents-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

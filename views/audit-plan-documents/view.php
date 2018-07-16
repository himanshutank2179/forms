<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AuditPlanDocuments */

$this->title = $model->audit_plan_document_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Plan Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-plan-documents-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->audit_plan_document_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->audit_plan_document_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'audit_plan_document_id',
            'company_id',
            'document_name',
            'document_no',
            'reviewed',
        ],
    ]) ?>

</div>

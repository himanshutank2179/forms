<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AuditPlanStandard */

$this->title = $model->audit_plan_standard_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Plan Standards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-plan-standard-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->audit_plan_standard_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->audit_plan_standard_id], [
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
            'audit_plan_standard_id',
            'standard_doc_record_management:ntext',
            'standard_quality_policy:ntext',
            'standard_responsibility:ntext',
            'standard_planning_and_determination:ntext',
            'standard_production_control:ntext',
            'standard_monitoring:ntext',
            'company_id',
        ],
    ]) ?>

</div>

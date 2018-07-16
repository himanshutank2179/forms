<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AuditElements */

$this->title = $model->audit_element_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Elements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-elements-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->audit_element_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->audit_element_id], [
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
            'audit_element_id',
            'company_id',
            'design_dev',
            'design_dev_boolean',
            'quality_man',
            'quality_man_boolean',
            'rec_control',
            'rec_control_boolean',
            'management_commitment',
            'management_commitment_boolean',
            'customer_focus',
            'customer_focus_boolean',
            'quality_policy',
            'quality_policy_boolean',
            'quality_objectives',
            'quality_objectives_boolean',
            'respo_autho',
            'respo_autho_boolean',
            'management_system',
            'management_system_boolean',
            'hr',
            'hr_boolean',
            'infratructure',
            'infratructure_boolean',
            'product_planning',
            'product_planning_boolean',
            'determination_review',
            'determination_review_boolean',
            'design_development',
            'design_development_boolean',
            'purchase_outsource',
            'purchase_outsource_boolean',
            'production_control',
            'production_control_boolean',
            'identification',
            'identification_boolean',
            'monitoring_control',
            'monitoring_control_boolean',
            'measurement_monitoring',
            'measurement_monitoring_boolean',
            'internal_audits',
            'internal_audits_boolean',
            'continueal_improovement',
            'continueal_improovement_boolean',
            'strengths_of_the_company:ntext',
        ],
    ]) ?>

</div>

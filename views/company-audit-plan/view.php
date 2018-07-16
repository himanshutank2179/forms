<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CompanyAuditPlan */

$this->title = $model->company_audit_plan_id;
$this->params['breadcrumbs'][] = ['label' => 'Company Audit Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-audit-plan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->company_audit_plan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->company_audit_plan_id], [
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
            'company_audit_plan_id',
            'audit_plan_date',
            'audit_first_date',
            'audit_last_date',
            'company_id',
            'remark:ntext',
            'created_at',
        ],
    ]) ?>

</div>

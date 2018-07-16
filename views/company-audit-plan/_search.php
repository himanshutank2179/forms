<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompanyAuditPlanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-audit-plan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'company_audit_plan_id') ?>

    <?= $form->field($model, 'audit_plan_date') ?>

    <?= $form->field($model, 'audit_first_date') ?>

    <?= $form->field($model, 'audit_last_date') ?>

    <?= $form->field($model, 'company_id') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuditPlanStandardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-plan-standard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'audit_plan_standard_id') ?>

    <?= $form->field($model, 'standard_doc_record_management') ?>

    <?= $form->field($model, 'standard_quality_policy') ?>

    <?= $form->field($model, 'standard_responsibility') ?>

    <?= $form->field($model, 'standard_planning_and_determination') ?>

    <?php // echo $form->field($model, 'standard_production_control') ?>

    <?php // echo $form->field($model, 'standard_monitoring') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

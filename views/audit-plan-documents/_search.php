<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuditPlanDocumentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-plan-documents-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'audit_plan_document_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'document_name') ?>

    <?= $form->field($model, 'document_no') ?>

    <?= $form->field($model, 'reviewed') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

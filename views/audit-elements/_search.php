<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuditElementsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-elements-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'audit_element_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'design_dev') ?>

    <?= $form->field($model, 'design_dev_boolean') ?>

    <?= $form->field($model, 'quality_man') ?>

    <?php // echo $form->field($model, 'quality_man_boolean') ?>

    <?php // echo $form->field($model, 'rec_control') ?>

    <?php // echo $form->field($model, 'rec_control_boolean') ?>

    <?php // echo $form->field($model, 'management_commitment') ?>

    <?php // echo $form->field($model, 'management_commitment_boolean') ?>

    <?php // echo $form->field($model, 'customer_focus') ?>

    <?php // echo $form->field($model, 'customer_focus_boolean') ?>

    <?php // echo $form->field($model, 'quality_policy') ?>

    <?php // echo $form->field($model, 'quality_policy_boolean') ?>

    <?php // echo $form->field($model, 'quality_objectives') ?>

    <?php // echo $form->field($model, 'quality_objectives_boolean') ?>

    <?php // echo $form->field($model, 'respo_autho') ?>

    <?php // echo $form->field($model, 'respo_autho_boolean') ?>

    <?php // echo $form->field($model, 'management_system') ?>

    <?php // echo $form->field($model, 'management_system_boolean') ?>

    <?php // echo $form->field($model, 'hr') ?>

    <?php // echo $form->field($model, 'hr_boolean') ?>

    <?php // echo $form->field($model, 'infratructure') ?>

    <?php // echo $form->field($model, 'infratructure_boolean') ?>

    <?php // echo $form->field($model, 'product_planning') ?>

    <?php // echo $form->field($model, 'product_planning_boolean') ?>

    <?php // echo $form->field($model, 'determination_review') ?>

    <?php // echo $form->field($model, 'determination_review_boolean') ?>

    <?php // echo $form->field($model, 'design_development') ?>

    <?php // echo $form->field($model, 'design_development_boolean') ?>

    <?php // echo $form->field($model, 'purchase_outsource') ?>

    <?php // echo $form->field($model, 'purchase_outsource_boolean') ?>

    <?php // echo $form->field($model, 'production_control') ?>

    <?php // echo $form->field($model, 'production_control_boolean') ?>

    <?php // echo $form->field($model, 'identification') ?>

    <?php // echo $form->field($model, 'identification_boolean') ?>

    <?php // echo $form->field($model, 'monitoring_control') ?>

    <?php // echo $form->field($model, 'monitoring_control_boolean') ?>

    <?php // echo $form->field($model, 'measurement_monitoring') ?>

    <?php // echo $form->field($model, 'measurement_monitoring_boolean') ?>

    <?php // echo $form->field($model, 'internal_audits') ?>

    <?php // echo $form->field($model, 'internal_audits_boolean') ?>

    <?php // echo $form->field($model, 'continueal_improovement') ?>

    <?php // echo $form->field($model, 'continueal_improovement_boolean') ?>

    <?php // echo $form->field($model, 'strengths_of_the_company') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

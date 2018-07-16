<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuditElements */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-elements-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'design_dev') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'design_dev')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'design_dev_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'quality_man') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'quality_man')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'quality_man_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'rec_control') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'rec_control')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'rec_control_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'management_commitment') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'management_commitment')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'management_commitment_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'customer_focus') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'customer_focus')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'customer_focus_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'quality_policy') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'quality_policy')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'quality_policy_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'quality_objectives') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'quality_objectives')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'quality_objectives_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'respo_autho') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'respo_autho')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'respo_autho_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'management_system') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'management_system')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'management_system_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'hr') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'hr')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'hr_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'infratructure') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'infratructure')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'infratructure_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'product_planning') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'product_planning')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'product_planning_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'determination_review') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'determination_review')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'determination_review_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'design_development') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'design_development')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'design_development_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'purchase_outsource') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'purchase_outsource')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'purchase_outsource_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'production_control') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'production_control')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'production_control_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'identification') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'identification')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'identification_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'monitoring_control') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'monitoring_control')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'monitoring_control_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'measurement_monitoring') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'measurement_monitoring')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'measurement_monitoring_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'internal_audits') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'internal_audits')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'internal_audits_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <?= Html::activeLabel($model, 'continueal_improovement') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'continueal_improovement')->dropDownList(['not applied' => 'not applied', 'low' => 'low', 'medium' => 'medium', 'high'])->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'continueal_improovement_boolean')->checkbox(['label' => false]); ?>
        </div>
    </div>


    <?= $form->field($model, 'strengths_of_the_company')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

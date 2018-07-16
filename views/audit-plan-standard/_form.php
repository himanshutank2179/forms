<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuditPlanStandard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-plan-standard-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'standard_doc_record_management')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'standard_quality_policy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'standard_responsibility')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'standard_planning_and_determination')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'standard_production_control')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'standard_monitoring')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

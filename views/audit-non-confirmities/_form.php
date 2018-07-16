<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuditNonConfirmities */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-non-confirmities-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'design_dev')->textInput() ?>

    <?= $form->field($model, 'non-confirming_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'non_confirmitie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

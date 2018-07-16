<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JobcardOperationDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobcard-operation-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'jobcard_operation_detail_id') ?>

    <?= $form->field($model, 'jobcard_id') ?>

    <?= $form->field($model, 'operation_id') ?>

    <?= $form->field($model, 'start_from') ?>

    <?= $form->field($model, 'end_to') ?>

    <?php // echo $form->field($model, 'm_ch_ve') ?>

    <?php // echo $form->field($model, 'parameter') ?>

    <?php // echo $form->field($model, 'ok') ?>

    <?php // echo $form->field($model, 'rejected') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'in_process_qc_no') ?>

    <?php // echo $form->field($model, 'final_qc_no') ?>

    <?php // echo $form->field($model, 'pressure_test_report_no') ?>

    <?php // echo $form->field($model, 'operator') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

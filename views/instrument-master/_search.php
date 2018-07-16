<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InstrumentMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instrument-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'instrument_master_id') ?>

    <?= $form->field($model, 'name_of_instrument') ?>

    <?= $form->field($model, 'instrument_identification_no') ?>

    <?= $form->field($model, 'make_and_sr_no') ?>

    <?= $form->field($model, 'capacity') ?>

    <?php // echo $form->field($model, 'least_count') ?>

    <?php // echo $form->field($model, 'acceptance_criteria') ?>

    <?php // echo $form->field($model, 'calibration_certi_no') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'next_due_on') ?>

    <?php // echo $form->field($model, 'sign_qc') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

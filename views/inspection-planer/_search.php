<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InspectionPlanerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inspection-planer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'inspection_planer_id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'process_id') ?>

    <?= $form->field($model, 'parameter_id') ?>

    <?= $form->field($model, 'tolerance') ?>

    <?php // echo $form->field($model, 'inspection_stage') ?>

    <?php // echo $form->field($model, 'sampling_plan') ?>

    <?php // echo $form->field($model, 'test_method') ?>

    <?php // echo $form->field($model, 'inspected_by') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'record') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

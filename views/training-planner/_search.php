<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrainingPlannerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="training-planner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'training_planner_id') ?>

    <?= $form->field($model, 'name_of_training') ?>

    <?= $form->field($model, 'period') ?>

    <?= $form->field($model, 'type_of_training') ?>

    <?= $form->field($model, 'employee_id') ?>

    <?php // echo $form->field($model, 'designation') ?>

    <?php // echo $form->field($model, 'actual_trining_date') ?>

    <?php // echo $form->field($model, 'faculty') ?>

    <?php // echo $form->field($model, 'training_feedback') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

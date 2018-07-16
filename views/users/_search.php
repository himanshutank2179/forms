<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'emp_code') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'education_qualification') ?>

    <?= $form->field($model, 'professional_education') ?>

    <?php // echo $form->field($model, 'designation') ?>

    <?php // echo $form->field($model, 'experience') ?>

    <?php // echo $form->field($model, 'responsibility_id') ?>

    <?php // echo $form->field($model, 'authority') ?>

    <?php // echo $form->field($model, 'signature_of_staff') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuppilerEvaluationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suppiler-evaluation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'sppiler_evaluation_id') ?>

    <?= $form->field($model, 'vendor_id') ?>

    <?= $form->field($model, 'month') ?>

    <?= $form->field($model, 'total_po') ?>

    <?= $form->field($model, 'purchase_qty') ?>

    <?php // echo $form->field($model, 'value') ?>

    <?php // echo $form->field($model, 'on_time_delevery') ?>

    <?php // echo $form->field($model, 'current_lot_size') ?>

    <?php // echo $form->field($model, 'total_supplied') ?>

    <?php // echo $form->field($model, 'accepted') ?>

    <?php // echo $form->field($model, 'rejected') ?>

    <?php // echo $form->field($model, 'first_performance') ?>

    <?php // echo $form->field($model, 'second_performance') ?>

    <?php // echo $form->field($model, 'third_performance') ?>

    <?php // echo $form->field($model, 'total_marks') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

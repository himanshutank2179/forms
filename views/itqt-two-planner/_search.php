<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItqtTwoPlannerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itqt-two-planner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'itqt_two_planner_id') ?>

    <?= $form->field($model, 'process') ?>

    <?= $form->field($model, 'parameter') ?>

    <?= $form->field($model, 'width') ?>

    <?= $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'thickness') ?>

    <?php // echo $form->field($model, 'straightness') ?>

    <?php // echo $form->field($model, 'ovality') ?>

    <?php // echo $form->field($model, 'tolerance') ?>

    <?php // echo $form->field($model, 'process_standard_parameter') ?>

    <?php // echo $form->field($model, 'sampling_plan') ?>

    <?php // echo $form->field($model, 'record') ?>

    <?php // echo $form->field($model, 'resposi_ability') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

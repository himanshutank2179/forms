<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItqtOnePlannerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itqt-one-planner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'itqt_one_planner_id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'parameter') ?>

    <?= $form->field($model, 'sampling_plan') ?>

    <?= $form->field($model, 'record') ?>

    <?php // echo $form->field($model, 'resposi_ability') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

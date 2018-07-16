<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DndPlanDsnSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dnd-plan-dsn-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'dnd_plan_dsn_id') ?>

    <?= $form->field($model, 'sr_no') ?>

    <?= $form->field($model, 'activities_to_perform') ?>

    <?= $form->field($model, 'responsibility') ?>

    <?= $form->field($model, 'resources_required') ?>

    <?php // echo $form->field($model, 'person_consulted') ?>

    <?php // echo $form->field($model, 'record') ?>

    <?php // echo $form->field($model, 'activity_to_be_reviewed_on') ?>

    <?php // echo $form->field($model, 'actual_dt_of_completion') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

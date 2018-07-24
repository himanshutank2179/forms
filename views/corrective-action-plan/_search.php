<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CorrectiveActionPlanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="corrective-action-plan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'corrective_action_plan_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'non_confirmitie') ?>

    <?= $form->field($model, 'non_confirmitie_desc') ?>

    <?php // echo $form->field($model, 'result_of_investigation') ?>

    <?php // echo $form->field($model, 'identified_by') ?>

    <?php // echo $form->field($model, 'c_action_recomand') ?>

    <?php // echo $form->field($model, 'responsibility') ?>

    <?php // echo $form->field($model, 'evidence') ?>

    <?php // echo $form->field($model, 'taken_by') ?>

    <?php // echo $form->field($model, 'document_change') ?>

    <?php // echo $form->field($model, 'correction_effect') ?>

    <?php // echo $form->field($model, 'applicable_doc') ?>

    <?php // echo $form->field($model, 'management_representative') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

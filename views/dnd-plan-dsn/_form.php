<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DndPlanDsn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dnd-plan-dsn-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'sr_no')->textInput() ?>

            <?= $form->field($model, 'activities_to_perform')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'responsibility')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'resources_required')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'person_consulted')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'record')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'activity_to_be_reviewed_on')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'actual_dt_of_completion')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    
    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

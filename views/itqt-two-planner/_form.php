<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItqtTwoPlanner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itqt-two-planner-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'process')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'parameter')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'width')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'length')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">

            <?= $form->field($model, 'thickness')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'straightness')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'ovality')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'tolerance')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'process_standard_parameter')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'sampling_plan')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'record')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'resposi_ability')->textInput(['maxlength' => true]) ?>
        </div>
    </div>





    <?php if ($model->isNewRecord): ?>
        <?= $form->field($model, 'created_at')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false); ?>
    <?php endif; ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

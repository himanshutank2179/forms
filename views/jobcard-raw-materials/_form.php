<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JobcardRawMaterials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobcard-raw-materials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'heat_no')->textInput() ?>

    <?= $form->field($model, 'lot_no')->textInput() ?>

    <?= $form->field($model, 'tc_no')->textInput() ?>

    <?= $form->field($model, 'jobcard_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

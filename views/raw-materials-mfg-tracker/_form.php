<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RawMaterialsMfgTracker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="raw-materials-mfg-tracker-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->dropDownList(AppHelper::getProducts(),['prompt'=>'Select Product']) ?>

            <?= $form->field($model, 'starting_inventory')->textInput() ?>

            <?= $form->field($model, 're_order_point')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'purchases')->textInput() ?>

            <?= $form->field($model, 'available_now')->textInput() ?>

            <?= $form->field($model, 'to_order')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

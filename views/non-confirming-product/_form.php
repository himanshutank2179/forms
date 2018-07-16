<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NonConfirmingProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="non-confirming-product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'GRN_NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'resion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'return_to_vendor_qty')->textInput() ?>

    <?= $form->field($model, 'rework_qty')->textInput() ?>

    <?= $form->field($model, 'scrap_qty')->textInput() ?>

    <?= $form->field($model, 'sales_on_discount_qty')->textInput() ?>

    <?= $form->field($model, 'sign_of_prod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_deleted')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

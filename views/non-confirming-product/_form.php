<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NonConfirmingProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="non-confirming-product-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'date')->textInput(['class'=>'datepicker form-control']) ?>

            <?= $form->field($model, 'GRN_NO')->dropDownList(AppHelper::getGRNO(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'product_id')->dropDownList(AppHelper::getAllProducts(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>


            <?= $form->field($model, 'return_to_vendor_qty')->textInput() ?>

            <?= $form->field($model, 'qty')->textInput() ?>

        </div>
        <div class="col-md-6">

            <?= $form->field($model, 'balance')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'rework_qty')->textInput() ?>

            <?= $form->field($model, 'scrap_qty')->textInput() ?>

            <?= $form->field($model, 'sales_on_discount_qty')->textInput() ?>

            <?= $form->field($model, 'sign_of_prod')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'resion')->textarea(['rows' => 6]) ?>
        </div>
    </div>






    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);
?>
<?php
$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);
?>


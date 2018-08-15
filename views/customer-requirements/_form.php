<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerRequirements */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-requirements-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model) ?>

    <div class="row">
        <div class="col-md-6">


            <?= $form->field($model, 'date')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'client_id')->dropDownList(AppHelper::getClients(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'quatation')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'quatation_ref')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'customer_po_number')->textInput(['maxlength' => true]) ?>
            

            <?= $form->field($model, 'order_review_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'date_of_dispatch')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'item')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'invoice_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'product_info')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);
?>
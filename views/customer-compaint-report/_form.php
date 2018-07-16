<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerCompaintReport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-compaint-report-form">



    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">


            <?= $form->field($model, 'date')->textInput(['class'=>'form-control datepicker']) ?>

            <?= $form->field($model, 'date_of_receipt_of_compliant')->textInput(['class'=>'form-control datepicker']) ?>

            <?= $form->field($model, 'received_by')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'made_of_receipt')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'customer_id')->dropDownList(AppHelper::getClients(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'product_id')->dropDownList(AppHelper::getProducts(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>



        </div>
        <div class="col-md-6">
            <?php $form->field($model, 'incomming_qc_no')->textInput() ?>

            <?= $form->field($model, 'date_of_dispatch')->textInput(['class'=>'form-control datepicker']) ?>

            <?= $form->field($model, 'invoice_no')->dropDownList(AppHelper::getInvoiceNo(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'compaint_nature')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'analysed_by')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'closed_by')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'compaint_desc')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'report_of_work')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'corrective_action')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'taken_action_result')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'proposed_action')->textarea(['rows' => 6]) ?>
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

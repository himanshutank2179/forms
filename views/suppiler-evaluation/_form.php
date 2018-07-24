<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuppilerEvaluation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suppiler-evaluation-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'vendor_id')->dropDownList(AppHelper::getVendors(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'month')->dropDownList(AppHelper::getMonths(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'total_po')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'purchase_qty')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'value')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'on_time_delevery')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'current_lot_size')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'total_supplied')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'accepted')->textInput(['onblur'=>'evaluationHandler()']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'rejected')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'first_performance')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'second_performance')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'third_performance')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'total_marks')->textInput(['maxlength' => true]) ?>
        </div>
    </div>











    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("
    function evaluationHandler(){
        // Getting Accepted Quantity
        var totalSuppliedQty =  $('#suppilerevaluation-total_supplied').val();
        var totalAcceptedQty =  $('#suppilerevaluation-accepted').val();
        var purchaseQty = $('#suppilerevaluation-purchase_qty').val();
        var rejected = parseInt(totalSuppliedQty) - parseInt(totalAcceptedQty);
        $('#suppilerevaluation-rejected').val(rejected);
        
        
        var totalPO = $('#suppilerevaluation-total_po').val();                
        var onTimeDelivery = $('#suppilerevaluation-on_time_delevery').val();
        
        
        
        var firstPhase = parseFloat(onTimeDelivery) * 40 / parseFloat(totalPO);
        var secondPhase = parseFloat(onTimeDelivery) * 20 / parseFloat(totalPO);
        var thirdPhase = parseFloat(totalAcceptedQty) * 40 / parseFloat(purchaseQty);     
        
        
        $('#suppilerevaluation-first_performance').val(firstPhase);
        $('#suppilerevaluation-second_performance').val(secondPhase);
        $('#suppilerevaluation-third_performance').val(thirdPhase);
        
        
        
        var totalMarks=parseFloat(firstPhase) + parseFloat(secondPhase)+ parseFloat(thirdPhase);
        
        $('#suppilerevaluation-total_marks').val(totalMarks);
        
    }
", \yii\web\View::POS_END);
?>

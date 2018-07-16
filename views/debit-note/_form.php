<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DebitNote */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    div#ajax-document {
        border: 1px solid #c6c6c6;
        padding: 10px 10px;
        margin: 10px 10px;
    }
</style>

<div class="debit-note-form">

    <?php $form = ActiveForm::begin(); ?>


    <h3>Add Items</h3>
    <div class="row">

        <div id="ajax-document"></div>

    </div>

    <br>
    <div class="row">
        <div class="col-md-12">
            <a id="add-product"
               onclick="ajaxform.addFloatForm('<?= Url::to(['debit-note/get-float-form'], true) ?>','ajax-document');"
               href="javascript:;"
               class="btn btn-info col-md-12">Add More</a>
        </div>

    </div>

    <br><br>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true, 'value' => 0, 'type' => 'number',
        'step' => '0.01','readonly'=>true]) ?>

    <br><br>

    <div class="row">
        <div class="col-md-6">

            <?= $form->field($model, 'party_name')->dropDownList(AppHelper::getVendors(), ['class' => 'form-control select4', 'prompt' => 'Please Select', 'onChange' => 'vendorDataHandler(this)']) ?>

            <?= $form->field($model, 'bill_no')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'delivery_charges')->textInput(['maxlength' => true]) ?>


            <?= $form->field($model, 'company_gst_no')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'party_gst')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'address1')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'address2')->textarea(['rows' => 6]) ?>


        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'date')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'bill_date')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'party_gst_no')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'company_gst')->textInput(['maxlength' => true]) ?>



            <?= $form->field($model, 'address3')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>
        </div>
    </div>




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php


$this->registerJs("


  ajaxform.addFloatForm('" . Url::to(['debit-note/get-float-form'], true) . "','ajax-document'); 
  
  
 function qtyamountHandler(element){
        let ID = $(element).attr('id');
        let idArr = ID.split('-');
        let elementIndex = idArr[2];
        
        if($('#debitnotedetails-rate-' + elementIndex) != ''){
            amountHandler(element);            
        }
  }
  
  
  function amountHandler(element)
  {
        let ID = $(element).attr('id');
        let idArr = ID.split('-');
        let elementIndex = idArr[2];
        
        var qty = $('#debitnotedetails-qty-' + elementIndex).val();
        var rate = $('#debitnotedetails-rate-' + elementIndex).val();
        var total = $('#debitnote-total').attr('value');      
        $('#debitnotedetails-amount-' + elementIndex).val((parseFloat(qty) * parseFloat(rate)));
        totalHandler();
//        var amount = $('#debitnotedetails-amount-' + elementIndex).val();
//        console.log('amount ',amount);
//        console.log('total ',total);    
        
        
        
        
        
                                
  }
  
  function totalHandler()
  {
    var grandTotal = 0;
    $('.amount').each(function(){
        grandTotal = (parseFloat(grandTotal) + parseFloat($(this).val()));
        $('#debitnote-total').val(grandTotal);
    });
    
  }
  
  
  function vendorDataHandler(element){
    var vendorID = $(element).val();
    $.ajax(
	{
	type: 'GET',
	url: 'get-vendor-details',
	data: {
		'id': vendorID
	},
	success: function (res)
	{
		console.log(res);
		$('#debitnote-party_gst_no').val(res.gstin);
	}
    });
  }
  
", \yii\web\View::POS_END);

$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);
?>

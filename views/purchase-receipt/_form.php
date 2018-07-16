<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseReceipt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-receipt-form">

    <?php $form = ActiveForm::begin(); ?>




    <?php if (!$model->isNewRecord): ?>
        <div class="row create-po">
            <div class="col-md-4"> <?= $form->field($model, 'product_id')->textInput() ?> </div>
            <div class="col-md-4"><?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'receive_qty')->textInput() ?></div>
            <div class="col-md-4"><?= $form->field($model, 'rejected_qty')->textInput() ?></div>
            <div class="col-md-4"><?= $form->field($model, 'accepted_qty')->textInput() ?></div>
            <div class="col-md-4"><?= $form->field($model, 'unit_price')->textInput() ?></div>
            <div class="col-md-4"><?= $form->field($model, 'order_no')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'gst')->textInput() ?></div>
            <div class="col-md-4"><?= $form->field($model, 'total_amount')->textInput() ?></div>
            <div class="col-md-4"><?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?></div>
        </div>
    <?php else: ?>


        <div class="row">
            <div class="col-md-4">
                <?=
                $form->field($model, 'po_no')->dropDownList(AppHelper::getPONo(), [
                    'class' => 'form-control select4',
                    'prompt' => 'Please Select',
                    'id' => 'purchasereceipt-po_no',
                    'onchange' => 'ponoChange(this)'
                ]);
                ?>
            </div>
        </div>
        <div class="row">

            <div id="ajax-document"></div>

        </div>
        <br>
       <!-- <div class="row">
            <div class="col-md-12">
                <a id="add-product"
                   onclick="ajaxform.addFloatForm('<?/*= Url::to(['purchase-receipt/get-float-form'], true) */?>','ajax-document')"
                   href="javascript:;"
                   class="btn btn-info col-md-12">Add More Product</a>
            </div>

        </div>-->

        <br>


    <?php endif; ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);
/*$this->registerJs("$('#add-product').trigger('click');", \yii\web\View::POS_END);*/
$this->registerJs("
    function ponoChange(element){
    $('#ajax-document').empty();
     var val = $(element).val();
      $.ajax({
            type: 'GET',
            url: 'get-purchase-orders',            
            dataType: 'json',
            data:{ pono: val},
            success: function (data) {
                       /*if(data.length != 0){*/
                        ajaxform.loaderStart();
                      /* }*/
                                           
                        for (let [index, product] of Object.entries(data)) {
                        
                        console.log(product);
                            
                            setTimeout(function () { 
                                ajaxform.addFloatForm('" . Url::to(['purchase-receipt/get-float-form'], true) . "','ajax-document');
                                setTimeout(()=>{
                                    $('#purchasereceipt-product_id-'+index).val(product.product_id);                        
                                    $('#purchasereceipt-receive_qty-'+index).val(product.qty); 
                                    $('#purchasereceipt-rejected_qty-'+index).val(0); 
                                    $('#purchasereceipt-accepted_qty-'+index).val(product.qty); 
                                    $('#purchasereceipt-unit_price-'+index).val(product.unit_price); 
                                    $('#purchasereceipt-order_no-'+index).val(0); 
                                    $('#purchasereceipt-gst-'+index).val(0); 
                                    $('#purchasereceipt-total_amount-'+index).val(0); 
                                    $('#purchasereceipt-remark-'+index).val('');  
                                },1000);
                                if(index == (parseInt(data.length) - 1) ){  setTimeout(()=>{ ajaxform.loaderEnd(); },1000); }
                            }, 2000 * index);
                            
                            
                                                                             
                                                      
                        }                                  
            }
      });   
        
    }
", \yii\web\View::POS_END);
$this->registerJs("
        
//SUBMMITING COMMENTS FORM DATA USING AJAX     
         
         $('body').on('beforeSubmit', 'form#create-unit', function (e) {
            e.preventDefault();
            var formComent = $(this);
            
            if (formComent.find('.has-error').length) 
            {
                return false;
            }
                // submit form
                $.ajax({
                url    : '" . \yii\helpers\BaseUrl::to(['units-of-measures/create'], true) . "',
                type   : 'post',            
                data   : formComent.serialize(),
                    success: function (response) 
                    {            
                       
                       if(response.status == 200){
                       
                        $('.unitdd').append('<option value='+ response.data.units_of_measures_id +' >'+ response.data.name +'</option>');
                        $('#common-popup').modal('hide');
                        swal('Saved!', 'Unit has been added!', 'success');
                       }                                                                                                                                
                    },
                    error  : function () 
                    {
                        console.log('internal server error');
                    }
                });
            return false;
         });
         

", \yii\web\View::POS_END);
$this->registerJs("
    function rejectHandler(element){
    
        let ID = $(element).attr('id');
        let idArr = ID.split('-');
        let elementIndex = idArr[2];
                
        let receivedQty = $('#purchasereceipt-receive_qty-' + elementIndex).val();
        let acceptedQty = $('#purchasereceipt-accepted_qty-' + elementIndex).val();
        let rejectedQty = $(element).val();
        $('#purchasereceipt-accepted_qty-' + elementIndex).val(receivedQty - rejectedQty);                
        
        console.log($(element).val());
        
    }
", \yii\web\View::POS_END);

$this->registerJs("
    function gstHandler(element){ 
        
        let ID = $(element).attr('id');
        let idArr = ID.split('-');
        let elementIndex = idArr[2];
                
        let GST = $('#purchasereceipt-gst-' + elementIndex).val();   
        let unitPrice = $('#purchasereceipt-unit_price-' + elementIndex).val();  
        let isInterstate = $('#is-inter-state-' + elementIndex).val();
        let totalAmt = $('#purchasereceipt-total_amount-' + elementIndex).val();
        let acceptedQty = $('#purchasereceipt-accepted_qty-' + elementIndex).val();
        let receivedQty = $('#purchasereceipt-receive_qty-' + elementIndex).val();
        
        console.log(isInterstate);
        
        if(isInterstate == ''){
            alert('Please select Is Inter State Purchase?');
            $('#purchasereceipt-gst-' + elementIndex).val(0);
            return false;
        }
        
        let igst = unitPrice * GST /100;
        let cgst = igst / 2;
        let sgst = igst / 2;
        
        console.log('cgst',cgst);
        
        if(isInterstate == 1){
            $('#cgst-' + elementIndex).text( 'CGST : ' + cgst + ' | ');
            $('#sgst-' + elementIndex).text( 'SGST : ' + sgst);
        } else {
            $('#igst-' + elementIndex).text('IGST : ' + igst);       
        }
        let totalamount = (unitPrice * acceptedQty) + igst;
       $('#purchasereceipt-total_amount-' + elementIndex).val(totalamount);
       
       
       $('#purchasereceipt-cgst-' + elementIndex).val(cgst);
       $('#purchasereceipt-sgst-' + elementIndex).val(sgst);
       $('#purchasereceipt-igst-' + elementIndex).val(igst);
       
                      
    }
", \yii\web\View::POS_END);


?>

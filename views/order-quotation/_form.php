<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderQuotation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-quotation-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'inquiry_date')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'delivery_period')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'mod_of_dispatch')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'payment_terms')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'inasurance')->textInput(['maxlength' => true]) ?>


        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'inspection_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'approved_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'state_id')->dropDownList(AppHelper::getStates(), ['class' => 'form-control select4', 'prompt' => 'Please Select','onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('order-quotation/city-list?id=').'"+$(this).val(), function( data ) {
                    $( "#orderquotation-city_id" ).html( data );
                });
            ']) ?>


            <?= $form->field($model, 'city_id')->dropDownList([], ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>


            <?= $form->field($model, 'client_id')->dropDownList(AppHelper::getClients(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
    </div>

    <div class="row">

        <div id="ajax-document"></div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <a id="add-product"
               onclick="ajaxform.addFloatForm('<?= Url::to(['order-quotation/get-float-form'], true) ?>','ajax-document')"
               href="javascript:;"
               class="btn btn-info col-md-12">Add More Product</a>
        </div>

    </div>

    <br>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);
?>
<?php

$this->registerJs("ajaxform.addFloatForm('" . Url::to(['order-quotation/get-float-form'], true) . "','ajax-document'); ", \yii\web\View::POS_END);
$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);
$this->registerJs("
    $('input[type=number]').on(
    {
        keydown: function(e)
        {
            if (e.which === 32)
                return false;
        },
        change: function()
        {
            this.value = this.value.replace(/\s/g, '');
        }
    });
    function gstcalculate(element)
    {
        //console.log($(element).attr('dataid'));
        // var id=$(this).attr('field-id');
        // alert(id);

        var id = $(element).attr('dataid');
        var qty = $('#quotation-products-quantity-'+id).val();
        var rate = $('#quotation-products-rate-'+id).val();
        //var gstrate = $('#quotation-products-gst-'+id).val();
        var gstrate = $(element).val();
        var state = $('#orderquotation-state_id').find(':selected').val();
        console.log('state'+state);
        console.log('qty'+qty);
        console.log('rate'+rate);
        console.log('gstrate'+gstrate);
        
        var ptotal = parseFloat(qty) * parseFloat(rate);
        console.log('product total:'+ptotal);
        var totalgst = (parseFloat(ptotal) * parseFloat(gstrate)) / 100;
        console.log('total gst:'+totalgst);
        if (ptotal >= 1)
        {
            if(state != '')
            {
                if(state == '12')
                {
                    var sgst= parseFloat(totalgst) / parseFloat(2);
                    var cgst= parseFloat(totalgst) / parseFloat(2);
                    console.log('total sgst:'+sgst);
                    console.log('total cgst:'+cgst);
                    $('#quotation-products-sgst-'+id).val(sgst);
                    $('#quotation-products-cgst-'+id).val(cgst);
                    $('#quotation-products-igst-'+id).val(0);
                }
                else
                {
                    $('#quotation-products-sgst-'+id).val(0);
                    $('#quotation-products-cgst-'+id).val(0);
                    $('#quotation-products-igst-'+id).val(totalgst);
                }
                var  totalamount = parseFloat(ptotal) + parseFloat(totalgst);
                console.log('total Amount with gst:'+totalamount);
                $('#quotation-products-total_gst-'+id).val(totalgst.toFixed(2));
                $('#quotation-products-total_amount-'+id).val(totalamount.toFixed(2));
            }
            else
            {
                alert('Please Select State or City First');
                $('#quotation-products-quantity-'+id).val('');
                $('#quotation-products-rate-'+id).val('');
                $('#quotation-products-gst-'+id).val('');
                $('#quotation-products-sgst-'+id).val('');
                $('#quotation-products-cgst-'+id).val('');
                $('#quotation-products-igst-'+id).val('');
                $('#quotation-products-total_gst-'+id).val('');
                $('#quotation-products-total_amount-'+id).val('');
                $('#orderquotation-state_id').focus();
            }
            
        }    
        else
        {
            alert('please input quantity or rate or Gst Rate');
            $('#quotation-products-quantity-'+id).val('');
            $('#quotation-products-rate-'+id).val('');
            $('#quotation-products-gst-'+id).val('');
            $('#quotation-products-sgst-'+id).val('');
            $('#quotation-products-cgst-'+id).val('');
            $('#quotation-products-igst-'+id).val('');
            $('#quotation-products-total_gst-'+id).val('');
            $('#quotation-products-total_amount-'+id).val('');
            $('#quotation-products-quantity-'+id).focus();
        }
    }
", \yii\web\View::POS_END);
?>
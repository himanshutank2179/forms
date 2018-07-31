<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderQuotation */
/* @var $form yii\widgets\ActiveForm */
$type = Yii::$app->getRequest()->getQueryParam('type');

?>
    <style>
        .quotations {
            display: none;
        }
    </style>


    <div class="order-quotation-form">
        <?php $form = ActiveForm::begin(); ?>

        <?php if ($type == 'quotations'): ?>
            <div class="row">
                <div class="col-md-7 col-lg-offset-3">
                    <?= $form->field($model, 'inquiry_number')->dropDownList(AppHelper::getInquiryNumbers(), ['class' => 'form-control select4 inquiry', 'prompt' => 'Please Select', 'onchange' => 'quotationHandler(this)']) ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-7 col-lg-offset-3">
                <?= $form->field($model, 'inquiry_date')->textInput(['class' => 'datepicker form-control']) ?>

                <?= $form->field($model, 'state_id')->dropDownList(AppHelper::getStates(), ['class' => 'form-control select4', 'prompt' => 'Please Select', 'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('order-quotation/city-list?id=') . '"+$(this).val(), function( data ) {
                    $( "#orderquotation-city_id" ).html( data );
                });
            ']) ?>

                <?= $form->field($model, 'city_id')->dropDownList([], ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

                <?= $form->field($model, 'client_id')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'client_mobile')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'client_address')->textarea() ?>


                <div class="quotations animate">
                    <?= $form->field($model, 'mod_of_dispatch')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'payment_terms')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'inasurance')->textInput(['maxlength' => true]) ?>
                </div>


                <label for="">Want to Make Quote also?</label> <br>
                <?= Html::checkbox('isQuoteIncluded', '', ['id' => 'isQuoteIncluded']); ?> <label for="">YES</label>


                <?php if ($type != 'requirements'): ?>
                    <?= $form->field($model, 'inspection_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

                    <?= $form->field($model, 'approved_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
                <?php endif; ?>

                <?= $form->field($model, 'delivery_period')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'inquiry_remark')->textarea() ?>

            </div>
        </div>

        <div class="row">

            <div id="ajax-document"></div>

            <?php if (!$model->isNewRecord): ?>
                <?php $quote_product = \app\models\QuotationProducts::find()->where(['order_quotation_id' => $model->order_quotation_id])->all(); ?>
                <?php $newProduct = new \app\models\QuotationProducts(); ?>
                <?php //debugPrint($quote_product);  ?>
                <?php foreach ($quote_product as $key => $product): ?>
                    <?php $i = $key . rand(); ?>

                    <div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
                        <div class="row">

                            <div class="col-md-4">
                                <label for="quotation-products-product_id-<?= $i ?>"> Product </label>
                                <?= Html::activeDropDownList($newProduct, 'product_id[]', AppHelper::getProducts(), ['value' => $product->product_id, 'class' => 'form-control select4', 'required' => true, 'prompt' => 'Please Select', 'id' => 'quotation-products-product_id-' . $i,]) ?>
                            </div>




                            <div class="col-md-4">
                                <label for="quotation-products-quantity-<?= $i ?>">Quantity </label>
                                <?= Html::activeTextInput($newProduct, 'quantity[]', [
                                    'maxlength' => true,
                                    'class' => 'form-control',
                                    'id' => 'quotation-products-quantity-' . $i,
                                    'required' => true,
                                    'type' => 'number'
                                ]);
                                ?>
                            </div>

                            <div class="col-md-4">
                                <label for="quotation-products-rate-<?= $i ?>"> Rate</label>
                                <?= Html::activeTextInput($newProduct, 'rate[]', [
                                    'maxlength' => true,
                                    'class' => 'form-control',
                                    'id' => 'quotation-products-rate-' . $i,
                                    'required' => true,
                                    'type' => 'number'
                                ]);
                                ?>
                            </div>

                            <div class="col-md-4">
                                <label for="quotation-products-gst-<?= $i ?>">Gst Rate % </label>
                                <?= Html::activeTextInput($newProduct, 'gst[]', [
                                    'maxlength' => true,
                                    'dataid' => $i,
                                    'class' => 'form-control gstrate',
                                    'id' => 'quotation-products-gst-' . $i,
                                    'required' => true,
                                    'type' => 'number',
                                    'onblur' => 'gstcalculate(this)',
                                ]);
                                ?>
                            </div>

                            <div class="col-md-4">
                                <label for="quotation-products-sgst-<?= $i ?>"> SGST</label>
                                <?= Html::activeTextInput($newProduct, 'sgst[]', [
                                    'maxlength' => true,
                                    'class' => 'form-control',
                                    'id' => 'quotation-products-sgst-' . $i,
                                    'required' => true,
                                    'type' => 'text',
                                    'readonly' => true,
                                ]);
                                ?>
                            </div>

                            <div class="col-md-4">
                                <label for="quotation-products-cgst-<?= $i ?>"> CGST</label>
                                <?= Html::activeTextInput($newProduct, 'cgst[]', [
                                    'maxlength' => true,
                                    'class' => 'form-control',
                                    'id' => 'quotation-products-cgst-' . $i,
                                    'required' => true,
                                    'type' => 'text',
                                    'readonly' => true,
                                ]);
                                ?>
                            </div>

                            <div class="col-md-4">
                                <label for="quotation-products-igst-<?= $i ?>"> ISGT</label>
                                <?= Html::activeTextInput($newProduct, 'igst[]', [
                                    'maxlength' => true,
                                    'class' => 'form-control',
                                    'id' => 'quotation-products-igst-' . $i,
                                    'required' => true,
                                    'type' => 'text',
                                    'readonly' => true,
                                ]);
                                ?>
                            </div>

                            <div class="col-md-4">
                                <label for="quotation-products-total_gst-<?= $i ?>">Total GST</label>
                                <?= Html::activeTextInput($newProduct, 'total_gst[]', [
                                    'maxlength' => true,
                                    'class' => 'form-control',
                                    'id' => 'quotation-products-total_gst-' . $i,
                                    'required' => true,
                                    'type' => 'text',
                                    'readonly' => true,
                                ]);
                                ?>
                            </div>

                            <div class="col-md-4">
                                <label for="quotation-products-total_amount-<?= $i ?>"> Total Amount</label>
                                <?= Html::activeTextInput($newProduct, 'total_amount[]', [
                                    'maxlength' => true,
                                    'class' => 'form-control',
                                    'id' => 'quotation-products-total_amount-' . $i,
                                    'required' => true,
                                    'type' => 'text',
                                    'readonly' => true,
                                ]);
                                ?>
                            </div>

                            <div class="col-md-1">
                                <br>
                                <button class="btn btn-danger"
                                        onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">Remove
                                </button>
                            </div>


                        </div>
                    </div>
                <?php endforeach; ?>

            <?php endif; ?>

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
<?php if ($model->isNewRecord): ?>
    <?php $this->registerJs("ajaxform.addFloatForm('" . Url::to(['order-quotation/get-float-form'], true) . "','ajax-document'); ", \yii\web\View::POS_END); ?>
<?php endif; ?>

<?php
$quoteUrl = Url::to(['get-inquiry']);

$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);
$this->registerJs("
    
    function quotationHandler(element){
        var inquiry_number = $(element).val();
        $.ajax(
            {
            type: 'GET',
            url: 'get-inquiry',
            data: {
                id: inquiry_number
            },
            success: function (res)
            {                
                $('#orderquotation-inquiry_date').val(res[0].inquiry_date);                
                $('#orderquotation-delivery_period').val(res[0].delivery_period);
                $('#orderquotation-mod_of_dispatch').val(res[0].mod_of_dispatch);
                $('#orderquotation-payment_terms').val(res[0].payment_terms);
                $('#orderquotation-client_id').val(res[0].client_id);
                $('#orderquotation-client_mobile').val(res[0].client_mobile);
                $('#orderquotation-client_address').val(res[0].client_address);
                $('#orderquotation-inquiry_remark').val(res[0].inquiry_remark);
                $('#orderquotation-state_id').val(res[0].state_id).trigger('change');
                setTimeout(function () {  $('#orderquotation-city_id').val(res[0].city_id); },1000);
                $('#orderquotation-inspection_by').val(res[0].inspection_by).trigger('change');
                $('#orderquotation-approved_by').val(res[0].approved_by).trigger('change');
                 
                 
                 for (let [index, product] of Object.entries(res[1])) {
                        
                            
                            setTimeout(function () { 
                                $('#ajax-document').empty();
                                ajaxform.addFloatForm('" . Url::to(['order-quotation/get-float-form'], true) . "','ajax-document');
                                setTimeout(()=>{
                                   $('#quotation-products-product_id-' + index).val(product.product_id);                                              
                                   $('#quotation-products-quantity-' + index).val(product.quantity);                                              
                                   $('#quotation-products-rate-' + index).val(product.rate);                                              
                                   $('#quotation-products-gst-' + index).val(product.gst);                                              
                                   $('#quotation-products-sgst-' + index).val(product.sgst);                                              
                                   $('#quotation-products-cgst-' + index).val(product.cgst);                                              
                                   $('#quotation-products-igst-' + index).val(product.igst);                                              
                                   $('#quotation-products-total_gst-' + index).val(product.total_gst);                                              
                                   $('#quotation-products-total_amount-' + index).val(product.total_amount);                                              
                                },1000);
                            }, 2000 * index);
                            
                            
                                                                             
                                                      
                 }   
            }
        });
        
        
    }
    
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
    
    
     $('#isQuoteIncluded').change(function() {
        if($(this).is(':checked')) {            
           $('.quotations').fadeIn(1000);
        } 
        if(!$(this).is(':checked')) {            
           $('.quotations').fadeOut();
        }
        
    });
    
    
", \yii\web\View::POS_END);
?>
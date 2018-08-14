<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderConformation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-conformation-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">

            <?= $form->field($model, 'our_quote_ref_num')->dropDownList(AppHelper::getQuotationRef(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'inquiry_date')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'delivery_period')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'mod_of_dispatch')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'state_id')->dropDownList(AppHelper::getStates(), ['class' => 'form-control select4', 'prompt' => 'Please Select','onchange'=> '$.post( "'.Yii::$app->urlManager->createUrl('order-quotation/city-list?id=').'"+$(this).val(), function( data ) {
                    $( "#orderconformation-city_id" ).html( data );
                });
            ']) ?>
            <?= $form->field($model, 'client_id')->dropDownList(AppHelper::getClients(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'payment_terms')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'inasurance')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'inspection_by')->dropDownList([
                'Vendor'=>'Vendor',
                'Third Party'=>'Third Party',
                'Customer By Own'],
                ['class' => 'form-control select4', 'prompt' => 'Please Select', ]) ?>

            <?= $form->field($model, 'approved_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'city_id')->dropDownList([], ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
    </div>

    <div class="row">

        <div id="ajax-document">
            <?php

                if (!$model->isNewRecord)
                {
                    $quotationproducts = app\models\OrderConfProducts::find()->where(['order_conformation_id' => $model->order_conformation_id])->all();
                    foreach ($quotationproducts as $i => $product):
                    ?>
                    <div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">

        <div class="col-md-2">
            <label for="order-conf-products-product_id-<?= $i ?>"> Product </label>
            <?= Html::activeDropDownList($product, 'product_id[]', AppHelper::getProducts(),['value'=> $product->product_id,'class' => 'form-control select4', 'required' => true, $product->product_id => $product->product_id,'id'=> 'order-conf-products-product_id-'.$i,]) ?>
        </div>
        
        <div class="col-md-1">
            <label for="order-conf-products-quantity-<?= $i ?>">Quantity </label>
            <?= Html::activeTextInput($product, 'quantity[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-quantity-' . $i,
                'required' => true,
                'type'=>'number',
                'value' => $product->quantity,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-rate-<?= $i ?>"> Rate</label>
            <?= Html::activeTextInput($product, 'rate[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-rate-' . $i,
                'required' => true,
                'type'=>'number',
                'value' => $product->rate,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-gst-<?= $i ?>">Gst Rate % </label>
            <?= Html::activeTextInput($product, 'gst[]', [
                'maxlength' => true,
                'dataid' => $i,
                'class' => 'form-control gstrate',
                'id' => 'order-conf-products-gst-' . $i,
                'required' => true,
                'type'=>'number',
                'onblur' => 'gstcalculate(this)',
                'value' => $product->gst,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-sgst-<?= $i ?>"> SGST</label>
            <?= Html::activeTextInput($product, 'sgst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-sgst-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
                'value' => $product->sgst,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-cgst-<?= $i ?>"> CGST</label>
            <?= Html::activeTextInput($product, 'cgst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-cgst-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
                'value' => $product->cgst,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-igst-<?= $i ?>"> ISGT</label>
            <?= Html::activeTextInput($product, 'igst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-igst-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
                'value' => $product->igst,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <label for="order-conf-products-total_gst-<?= $i ?>">Total GST</label>
            <?= Html::activeTextInput($product, 'total_gst[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-total_gst-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
                'value' => $product->total_gst,
            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="order-conf-products-total_amount-<?= $i ?>"> Total Amount</label>
            <?= Html::activeTextInput($product, 'total_amount[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'order-conf-products-total_amount-' . $i,
                'required' => true,
                'type'=>'text',
                'readonly' => true,
                'value' => $product->total_amount,
            ]);
            ?>
        </div>

        <div class="col-md-1">
            <br>
            <button class="btn btn-danger" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">Remove</button>
        </div>


    </div>
</div>

                    <?php
                    endforeach;
                }
            ?>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <a id="add-product"
               onclick="ajaxform.addFloatForm('<?= Url::to(['order-conformation/get-float-form'], true) ?>','ajax-document')"
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
if ($model->isNewRecord)
{
$this->registerJs("ajaxform.addFloatForm('" . Url::to(['order-conformation/get-float-form'], true) . "','ajax-document'); ", \yii\web\View::POS_END);
}
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

$qrnurl = \yii\helpers\Url::toRoute('get-qrn-data', true);

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
     $('#orderconformation-our_quote_ref_num').on('change',function()
    {
        var qrnid = $('#orderconformation-our_quote_ref_num').find(':selected').val();
        $('#ajax-document').empty();
        $.ajax(
        {
            url: '$qrnurl',
            type: 'GET', 
            data:
            {
                qrnid: qrnid,
            },
            success: function(response)
            {
                // console.log(response);
                // console.log(response[0].city_id);
                $('#orderconformation-payment_terms').val(response[0].payment_terms);
                $('#orderconformation-inquiry_date').val(response[0].inquiry_date);
                $('#orderconformation-delivery_period').val(response[0].delivery_period);
                $('#orderconformation-mod_of_dispatch').val(response[0].mod_of_dispatch);
                $('#orderconformation-inasurance').val(response[0].inasurance);
                //$('#orderconformation-state_id').val(response[0].state_id);
                $('#orderconformation-state_id').val(response[0].state_id).trigger('change');
                //$('#orderconformation-inspection_by').val(response[0].inspection_by);
                //$('#orderconformation-inspection_by').val(response[0].inspection_by).trigger('change');
                //$('#orderconformation-approved_by').val(response[0].approved_by);
                $('#orderconformation-approved_by').val(response[0].approved_by).trigger('change');
                //$('#orderconformation-city_id').val(response[0].city_id);
                setTimeout(()=>
                {
                    $('#orderconformation-city_id').val(response[0].city_id).trigger('change');
                },1000);
                

                for (let [index, product] of Object.entries(response[1]))
                {
                    setTimeout(function ()
                    { 
                        ajaxform.addFloatForm('" . Url::to(['/order-conformation/get-float-form'], true) . "','ajax-document');
                        setTimeout(()=>{
                        console.log('product.product_id ', product.product_id);
                            $('#order-conf-products-product_id-' + index).val(product.product_id);
                            $('#order-conf-products-quantity-' + index).val(product.quantity);
                            $('#order-conf-products-rate-' + index).val(product.rate);
                            $('#order-conf-products-gst-' + index).val(product.gst);
                            $('#order-conf-products-sgst-' + index).val(product.sgst);
                            $('#order-conf-products-cgst-' + index).val(product.cgst);
                            $('#order-conf-products-igst-' + index).val(product.igst);
                            $('#order-conf-products-total_gst-' + index).val(product.total_gst);
                            $('#order-conf-products-total_amount-' + index).val(product.total_amount);                              
                        },1000);
                    }, 2000 * index);
                }
            },
            error: function(xhr)
            {
                //Do Something to handle error
            }
        });
    });
", \yii\web\View::POS_END);
$this->registerJs("
    function gstcalculate(element)
    {
        //console.log($(element).attr('dataid'));
        // var id=$(this).attr('field-id');
        // alert(id);

        var id = $(element).attr('dataid');
        var qty = $('#order-conf-products-quantity-'+id).val();
        var rate = $('#order-conf-products-rate-'+id).val();
        //var gstrate = $('#order-conf-products-gst-'+id).val();
        var gstrate = $(element).val();
        var state = $('#orderconformation-state_id').find(':selected').val();
        console.log('state'+state);
        console.log('qty'+qty);
        console.log('rate'+rate);
        console.log('gstrate'+gstrate);
        
        var ptotal = parseFloat(qty) * parseFloat(rate);
        console.log('product total:'+ptotal);
        var totalgst = (parseFloat(ptotal) * parseFloat(gstrate)) / 100;
        console.log('total gst:' + totalgst);
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
                    $('#order-conf-products-sgst-'+id).val(sgst);
                    $('#order-conf-products-cgst-'+id).val(cgst);
                    $('#order-conf-products-igst-'+id).val(0);
                }
                else
                {
                    $('#order-conf-products-sgst-'+id).val(0);
                    $('#order-conf-products-cgst-'+id).val(0);
                    $('#order-conf-products-igst-'+id).val(totalgst);
                }
                var  totalamount = parseFloat(ptotal) + parseFloat(totalgst);
                console.log('total Amount with gst:'+totalamount);
                $('#order-conf-products-total_gst-'+id).val(totalgst.toFixed(2));
                $('#order-conf-products-total_amount-'+id).val(totalamount.toFixed(2));
            }
            else
            {
                alert('Please Select State or City First');
                $('#order-conf-products-quantity-'+id).val('');
                $('#order-conf-products-rate-'+id).val('');
                $('#order-conf-products-gst-'+id).val('');
                $('#order-conf-products-sgst-'+id).val('');
                $('#order-conf-products-cgst-'+id).val('');
                $('#order-conf-products-igst-'+id).val('');
                $('#order-conf-products-total_gst-'+id).val('');
                $('#order-conf-products-total_amount-'+id).val('');
                $('#orderconformation-state_id').focus();
            }
            
        }    
        else
        {
            alert('please input quantity or rate or Gst Rate');
            $('#order-conf-products-quantity-'+id).val('');
            $('#order-conf-products-rate-'+id).val('');
            $('#order-conf-products-gst-'+id).val('');
            $('#order-conf-products-sgst-'+id).val('');
            $('#order-conf-products-cgst-'+id).val('');
            $('#order-conf-products-igst-'+id).val('');
            $('#order-conf-products-total_gst-'+id).val('');
            $('#order-conf-products-total_amount-'+id).val('');
            $('#order-conf-products-quantity-'+id).focus();
        }
    }
", \yii\web\View::POS_END);
?>
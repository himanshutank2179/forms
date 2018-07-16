<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">

    <span id="isvalid<?= $i ?>"></span>

    <span id="is_height_valid<?= $i ?>"></span>

    <hr>

    <div class="row">


        <div class="col-md-2">
            <label for="incommingqc-manufacturer-<?= $i ?>"> Manufacturer </label>

            <?= Html::activeTextInput($model, 'manufacturer[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-manufacturer-' . $i,
                /*'required' => true,*/


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="incommingqc-label_particulars-<?= $i ?>"> Label Particulars </label>

            <?= Html::activeTextInput($model, 'label_particulars[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-label_particulars-' . $i,
                /*'required' => true,*/


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="incommingqc-mfg_date-<?= $i ?>"> MFG Date </label>

            <?= Html::activeTextInput($model, 'mfg_date[]', [
                'maxlength' => true,
                'class' => 'form-control datepicker',
                'id' => 'incommingqc-mfg_date-' . $i,
                /*'required' => true,*/


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="incommingqc-heat-<?= $i ?>"> Heat </label>

            <?= Html::activeTextInput($model, 'heat[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-heat-' . $i,
                /*'required' => true,*/


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="incommingqc-lot-<?= $i ?>"> Lot </label>

            <?= Html::activeTextInput($model, 'lot[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-lot-' . $i,
                /*'required' => true,*/
                /* 'step' => '0.01',
                 'type' => 'number'*/


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="incommingqc-batch_no-<?= $i ?>"> Batch No </label>

            <?= Html::activeTextInput($model, 'batch_no[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-batch_no-' . $i,
                /*'required' => true,*/
                /* 'step' => '0.01',
                 'type' => 'number'*/


            ]);
            ?>
        </div>
        <div class="col-md-2">
            <label for="incommingqc-v_test_no-<?= $i ?>"> Vendor Test No. </label>

            <?= Html::activeTextInput($model, 'v_test_no[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-v_test_no-' . $i,
                /*'required' => true,*/
                /*  'step' => '0.01',
                  'type' => 'number'*/


            ]);
            ?>
        </div>
        <div class="col-md-2">
            <label for="incommingqc-date-<?= $i ?>"> Date </label>

            <?= Html::activeTextInput($model, 'date[]', [
                'maxlength' => true,
                'class' => 'form-control datepicker',
                'id' => 'incommingqc-date-' . $i,
                /*'required' => true,*/


            ]);
            ?>
        </div>


        <div class="col-md-2">
            <label for="incommingqc-product_id-<?= $i ?>"> Product </label>

            <?=
            Html::activeDropDownList($model, 'product_id[]', AppHelper::getRawMaterials(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'incommingqc-product_id-' . $i,
                /*'onchange'=>'parameterHandler(this)',*/


                /*'required' => true*/

            ]);
            ?>

        </div>

        <div class="col-md-2">
            <label for="incommingqc-qty-<?= $i ?>"> Quantity </label>

            <?= Html::activeTextInput($model, 'qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-qty-' . $i,
                /*'required' => true,*/
                'type' => 'number'


            ]);
            ?>
        </div>


        <div class="col-md-2">
            <label for="incommingqc-rejected_qty-<?= $i ?>">Rejected Quantity </label>

            <?= Html::activeTextInput($model, 'rejected_qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-rejected_qty-' . $i,
                'required' => true,
                'type' => 'number',
                'onchange' => 'rejectHandler(this)'


            ]);
            ?>
        </div>

        <div class="col-md-2">
            <label for="incommingqc-accepted_qty-<?= $i ?>">Accepted Quantity </label>

            <?= Html::activeTextInput($model, 'accepted_qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-accepted_qty-' . $i,
                'required' => true,
                'type' => 'number'


            ]);
            ?>
        </div>


        <div class="col-md-2">
            <label for="purchaseorder-inspected_by-<?= $i ?>"> Inspected By </label>
            <?=
            Html::activeDropDownList($model, 'inspected_by[]', [
                'Vendor' => 'Vendor',
                'Third Party' => 'Third Party',
                'Customer By Own'], [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'incommingqc-inspected_by' . $i,
                /*'required' => true*/

            ]);
            ?>


        </div>

        <div class="col-md-2">
            <label for="purchaseorder-approved_by-<?= $i ?>"> Approved By </label>
            <?=
            Html::activeDropDownList($model, 'approved_by[]', AppHelper::getEmployee(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'incommingqc-approved_by' . $i,
                /*'required' => true*/

            ]);
            ?>

        </div>

        <div class="col-md-2">
            <label for="purchaseorder-is_approved-<?= $i ?>"> Is Approved ? </label>
            <?=
            Html::activeDropDownList($model, 'is_approved[]', [0 => 'No', 1 => 'Yes'], [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'incommingqc-is_approved-' . $i,
                /*'required' => true*/

            ]);
            ?>


        </div>

        <div class="col-md-11">
            <label for="incommingqc-remark-<?= $i ?>"> Remark </label>

            <?= Html::activeTextarea($model, 'remark[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'incommingqc-remark-' . $i,
                /* 'required' => true,*/


            ]);
            ?>
        </div>


    </div>

    <h4>Parameters </h4>

    <div class="row">
        <div id="ajax-parameter-<?php echo $i ?>"></div>
    </div>

    <button type="button" class=" btn btn-danger col-md-12" onclick="ajaxform.removeBlankFloatForm('<?php echo $i ?>')">
        Remove
    </button>
    <br><br>


    <?php

    $this->registerJs("
    function paramVerifyHandler(element){
        console.log(element);
        let ID = $(element).attr('id');
        let idArr = ID.split('-');
        let elementIndex = idArr[4];
        
        var desire = $('#incomming-qc-parameters-desire-value-' + elementIndex).val();
        var tolerance = $('#incomming-qc-parameters-tolerance-' + elementIndex).val();
        var actual = $(element).val();
        
        if(actual < (desire - tolerance) || actual > (desire + tolerance)){
            $('#incomming-qc-parameters-observation-' + elementIndex).val('Invalid');
            
        } else {
            $('#incomming-qc-parameters-observation-' + elementIndex).val('Valid');   
                       
        }
        
    }
", \yii\web\View::POS_END);

    $this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true                      
        });
", \yii\web\View::POS_END);

    $this->registerJs("
    
    setTimeout(function(){
    var productID = $('#incommingqc-product_id-" . $i . "').val();
    if(productID != 'undefined'){
        productParameter(productID);
    }
            
    },2000);
    $('#incommingqc-product_id-" . $i . "').on('change',function(){
            
            productParameter($(this).val());
    });
    function productParameter(productValue){
    
        
        $('#ajax-parameter-" . $i . "').empty();
            $.ajax(
                {
                type: 'GET',
                url: 'get-product-parameters',
                data: {
                    'product_id': productValue
                },
                success: function (response)
                {
                   
                   if(response.length != 0){
                    ajaxform.loaderStart();
                   }
                    for (let [index, parameter] of Object.entries(response)) {
                        
                        console.log(parameter);
                        console.log(index);
                   
                        setTimeout(function () { 
                            
                                
                                ajaxform.addFloatForm('" . Url::to(['incomming-qc/get-parameter-form'], true) . "','ajax-parameter-" . $i . "');
                                setTimeout(()=>{
                                    $('#incomming-qc-parameters-parameter_id-' + index).val(parameter.parameter_id);                                                                                                                          
                                    $('#incomming-qc-parameters-unit-' + index).val(parameter.unit);                                                                                                                          
                                    $('#incomming-qc-parameters-tolerance-' + index).val(parameter.tolerance);                                                                                                                          
                                    $('#incomming-qc-parameters-desire-value-' + index).val(parameter.value);                                                                                                                          
                                },1000);
                                if(index == (parseInt(response.length) - 1) ){
                                    
                                    setTimeout(()=>{ ajaxform.loaderEnd(); },1000);
                                    
                                }
                        }, 2500 * index);
                        
                     
                        
                    }
                    
                      
                    
                    
                }
            });
            
    }
    
       
", \yii\web\View::POS_END);


    ?>

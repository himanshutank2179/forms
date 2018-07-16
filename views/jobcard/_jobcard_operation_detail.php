<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;


?>
<div class="animated bounceInRight create-po document-form" id="<?= $i ?>">
    <div class="row">
        <div class="col-md-4">
            <label for="jobcard-operation-details-product_id-<?= $i ?>"> Item </label>
            <?=
            Html::activeDropDownList($model, 'product_id[]', AppHelper::getRawMaterials(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'jobcard-operation-details-product_id-' . $i,
                'required' => true

            ]);
            ?>
        </div>
        <div class="col-md-4">
            <label for="jobcard-operation-details-qty-<?= $i ?>"> Quantity </label>
            <?= Html::activeTextInput($model, 'qty[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-qty-' . $i,
            ]);
            ?>
        </div>
        <div class="col-md-4">
            <label for="jobcard-operation-details-heat_no-<?= $i ?>"> Incomming QC No. </label>
            <?=
            Html::activeDropDownList($model, 'incomming_qc_no[]', AppHelper::getIncommingQCNo(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'jobcard-operation-details-incomming_qc_no-' . $i,
                'required' => true

            ]);
            ?>
        </div>
    </div>
    <div class="row">


        <div class="col-md-4">
            <label for="jobcard-operation-details-operation_id-<?= $i ?>"> Operation </label>
            <?=
            Html::activeDropDownList($model, 'operation_id[]', AppHelper::getOperations(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select',
                'id' => 'jobcard-operation-details-operation_id-' . $i,
                'required' => true

            ]);
            ?>
        </div>

        <div class="col-md-4">
            <label for="jobcard-operation-details-start_from-<?= $i ?>"> Operation Start Date </label>
            <?= Html::activeTextInput($model, 'start_from[]', [
                'maxlength' => true,
                'class' => 'form-control datepicker',
                'id' => 'jobcard-operation-details-start_from-' . $i,
            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="jobcard-operation-details-end_to-<?= $i ?>"> Operation End Date</label>
            <?= Html::activeTextInput($model, 'end_to[]', [
                'maxlength' => true,
                'class' => 'form-control datepicker',
                'id' => 'jobcard-operation-details-end_to-' . $i,
            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="jobcard-operation-details-m_ch_ve-<?= $i ?>"> Machine</label>
            <?= Html::activeTextInput($model, 'm_ch_ve[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-m_ch_ve-' . $i,
            ]);
            ?>

        </div>


        <div class="col-md-4">
            <label for="jobcard-operation-details-total-<?= $i ?>"> Total </label>
            <?= Html::activeTextInput($model, 'total[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-total-' . $i,
            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="jobcard-operation-details-ok-<?= $i ?>"> O.K</label>
            <?= Html::activeTextInput($model, 'ok[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-ok-' . $i,
                'onblur' => 'qtyHandler(this)'
            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="jobcard-operation-details-rejected-<?= $i ?>"> Rejected </label>
            <?= Html::activeTextInput($model, 'rejected[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-rejected-' . $i,

            ]);
            ?>

        </div>


        <div class="col-md-4">
            <label for="jobcard-operation-details-in_process_qc_no-<?= $i ?>"> In Process QC </label>
            <?= Html::activeTextInput($model, 'in_process_qc_no[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-in_process_qc_no-' . $i,
            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="jobcard-operation-details-final_qc_no-<?= $i ?>"> Final QC No. </label>
            <?= Html::activeTextInput($model, 'final_qc_no[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-final_qc_no-' . $i,
            ]);
            ?>

        </div>

        <div class="col-md-4">
            <label for="jobcard-operation-details-pressure_test_report_no-<?= $i ?>"> Pressure Test Report No </label>
            <?= Html::activeTextInput($model, 'pressure_test_report_no[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-pressure_test_report_no-' . $i,
            ]);
            ?>
        </div>

        <div class="col-md-4">
            <label for="jobcard-operation-details-operator-<?= $i ?>"> Operator </label>
            <?= Html::activeTextInput($model, 'operator[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-operator-' . $i,
            ]);
            ?>
        </div>

        <div class="col-md-8">
            <label for="jobcard-operation-details-remark-<?= $i ?>"> Remark </label>
            <?= Html::activeTextarea($model, 'remark[]', [
                'maxlength' => true,
                'class' => 'form-control',
                'id' => 'jobcard-operation-details-remark-' . $i,

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
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);


    $this->registerJs("
    
    setTimeout(function(){
    var productID = $('#jobcard-operation-details-product_id-" . $i . "').val();
    console.log('productID ',productID);
    if(productID != 'undefined'){
        productParameter(productID);
    }
            
    },2000);
    $('#jobcard-operation-details-product_id-" . $i . "').on('change',function(){
            setTimeout(() => {  },1000);
            
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
                            
                                console.log('parameter.tolerance ',parameter.tolerance);
                                ajaxform.addFloatForm('" . Url::to(['jobcard/get-parameter-form'], true) . "','ajax-parameter-" . $i . "');
                                setTimeout(()=>{
                                    $('#jobcard-operation-parameter-parameter_id-' + index).val(parameter.parameter_id);                                                                                                                          
                                    $('#jobcard-operation-parameter-tolerance-' + index).val(parameter.parameter_id);                                                                                                                          
                                    $('#jobcard-operation-parameter-unit-' + index).val(parameter.unit);                                                                                                                          
                                    $('#jobcard-operation-parameter-tolerance-' + index).val(parameter.tolerance);  
                                    $('#jobcard-operation-parameter-product_id-' + index).val(productValue);                                                                                                                        
                                                                                                                                                             
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

    $this->registerJs("
    
    function calcAvg(element){
        console.log(element);
        let ID = $(element).attr('id');
        let idArr = ID.split('-');
        let elementIndex = idArr[4];
        
        let firstQC = $('#jobcard-operation-parameter-first_qc_result-' + elementIndex).val();
        let secondQC = $('#jobcard-operation-parameter-second_qc_result-' + elementIndex).val();
        let thirdQC = $(element).val();
        
        let avg = (parseFloat(firstQC) + parseFloat(secondQC) + parseFloat(thirdQC)) / 3;
        
        $('#jobcard-operation-parameter-averages-' + elementIndex).val(avg);
        
        
        
    }
    
       
", \yii\web\View::POS_END);
    ?>



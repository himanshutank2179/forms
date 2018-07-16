<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IncommingQc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="incomming-qc-form">

    <?php $form = ActiveForm::begin(); ?>



    <?php if (!$model->isNewRecord): ?>

        <div class="row">
            <div class="col-md-6">


                <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'label_particulars')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'mfg_date')->textInput(['class' => 'datepicker form-control']) ?>

                <?= $form->field($model, 'heat')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'lot')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'batch_no')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'v_test_no')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'date')->textInput(['class' => 'datepicker form-control']) ?>

                <?= $form->field($model, 'general_condition')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'product_id')->textInput() ?>

                <?= $form->field($model, 'qty')->textInput() ?>

                <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-md-6">


                <?= $form->field($model, 'visual_examination')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'dimensional_check')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'product_traceability_mark')->textInput(['maxlength' => true]) ?>

                <?php //$form->field($model, 'inspected_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select',]); ?>
                <?= $form->field($model, 'inspection_by')->dropDownList([
                    'Vendor'=>'Vendor',
                    'Third Party'=>'Third Party',
                    'Customer By Own'],
                    ['class' => 'form-control select4', 'prompt' => 'Please Select', ]) ?>

                <?= $form->field($model, 'approved_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select',]); ?>
            </div>
        </div>


    <?php else: ?>


        <div class="row">
            <div class="col-md-4">
                <?=
                $form->field($model, 'GRN_NO')->dropDownList(AppHelper::getGRNO(), [
                    'class' => 'form-control select4',
                    'prompt' => 'Please Select',
                    'id' => 'purchasereceipt-GRN_NO',
                    'onchange' => 'grnoChange(this)'
                ]);
                ?>
            </div>
        </div>
        <div class="row">

            <div id="ajax-document"></div>

        </div>
        <!--<br>
        <div class="row">
            <div class="col-md-12">
                <a id="add-product"
                   onclick="ajaxform.addFloatForm('<?/*= Url::to(['incomming-qc/get-float-form'], true) */?>','ajax-document')"
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

$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);
?>
<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);
$this->registerJs("

    function grnoChange(element){
    $('#ajax-document').empty();
    
     var val = $(element).val();
      $.ajax({
            type: 'GET',
            url: 'get-purchase-receipt',            
            dataType: 'json',
            data:{ grno: val},
            success: function (data) {
                        
                        
                        
                                           
                        for (let [index, product] of Object.entries(data)) {
                        
                            
                            setTimeout(function () { 
                                ajaxform.addFloatForm('" . Url::to(['incomming-qc/get-float-form'], true) . "','ajax-document');
                                setTimeout(()=>{
                                    $('#incommingqc-product_id-' + index).val(product.product_id);                        
                                    $('#incommingqc-qty-' + index).val(product.receive_qty);                        
                                    $('#incommingqc-rejected_qty-' + index).val(product.rejected_qty);                        
                                    $('#incommingqc-accepted_qty-' + index).val(product.accepted_qty);                        
                                      
                                },1000);
                            }, 2000 * index);
                            
                            
                                                                             
                                                      
                        }                                  
            }
      });   
        
    }
", \yii\web\View::POS_END);
$this->registerJs("
    function rejectHandler(element){
        
        let ID = $(element).attr('id');
        let idArr = ID.split('-');
        let elementIndex = idArr[2];
                
        let receivedQty = $('#incommingqc-qty-' + elementIndex).val();
        let acceptedQty = $('#incommingqc-accepted_qty-' + elementIndex).val();
        let rejectedQty = $(element).val();
        $('#incommingqc-accepted_qty-' + elementIndex).val(receivedQty - rejectedQty);                
        
        console.log($(element).val());
        
    }
", \yii\web\View::POS_END);




?>

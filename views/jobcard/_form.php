<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jobcard */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="jobcard-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'date')->textInput(['class' => 'form-control datepicker']) ?>

                <?= $form->field($model, 'finish_product_id')->dropDownList(AppHelper::getProducts(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

                <?= $form->field($model, 'product_description')->textarea() ?>

            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'qty')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>
            </div>
        </div>



        

        <div class="float-window-container">
            <h3>Job Card Operation Details</h3>

            <div class="row">

                <div id="ajax-document-operation"></div>

            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <a id="add-product"
                       onclick="ajaxform.addOperationForm('<?= Url::to(['jobcard/get-operation-form'], true) ?>','ajax-document-operation')"
                       href="javascript:;"
                       class="btn btn-info col-md-12 add-operation">Add More Items</a>
                </div>

            </div>
        </div>


        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);
$this->registerJs("ajaxform.addFloatForm('" . Url::to(['jobcard/get-float-form'], true) . "','ajax-document');", \yii\web\View::POS_END);

$this->registerJs("ajaxform.addOperationForm('" . Url::to(['jobcard/get-operation-form'], true) . "','ajax-document-operation');", \yii\web\View::POS_END);
$this->registerJs("function addNewItem(){ajaxform.addFloatForm('" . Url::to(['jobcard/get-float-form'], true) . "','ajax-document');}", \yii\web\View::POS_END);
$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);

$this->registerJs("
    function qtyHandler(element){
        
        let ID = $(element).attr('id');
        let idArr = ID.split('-');
        let elementIndex = idArr[4];
        
        var total = $('#jobcard-operation-details-total-' + elementIndex).val();
        var ok = $(element).val();
        $('#jobcard-operation-details-rejected-' + elementIndex).val((parseFloat(total) - parseFloat(ok)));
        
        
      
        
        
    }        
", \yii\web\View::POS_END);
/**/
?>
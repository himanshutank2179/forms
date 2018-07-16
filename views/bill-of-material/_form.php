<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BillOfMaterial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bill-of-material-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model); ?>



    <?php if (!$model->isNewRecord): ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'raw_materia_id')->dropDownList(AppHelper::getRawMaterials(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

                <?= $form->field($model, 'qty')->textInput(['maxlength' => true]) ?>


                <?= $form->field($model, 'unit_id')->dropDownList(AppHelper::getUnitsOfMeasures(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

                <?= $form->field($model, 'product_code')->textInput(['maxlength' => true]) ?>


            </div>
            <div class="col-md-6">

                <?= $form->field($model, 'document_id')->dropDownList(AppHelper::getAllDocuments(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

                <?= $form->field($model, 'procuring_by')->dropDownList(['ready_to_purchase' => 'Ready to Purchase', 'casting' => 'Casting', 'fabrication' => 'Fabrication', 'assembling' => 'Assembling'], ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

                <?= $form->field($model, 'perameters')->dropDownList(AppHelper::getParameters(), ['class' => 'form-control select4', 'prompt' => 'Please Select', 'multiple' => true]) ?>
            </div>

        </div>

    <?php else: ?>

        <div class="row">
            <div class="col-md-4">
                <?=
                $form->field($model, 'product_code')->dropDownList(AppHelper::getProductsCode(), [
                    'class' => 'form-control select4',
                    'prompt' => 'Please Select',
                    'id' => 'bill-of-material-product_code',
                    /*'onchange' => 'srnoChange(this)'*/
                ]);
                ?>
            </div>

        </div>
        <div class="row">

            <div id="ajax-document"></div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <a id="add-product"
                   onclick="ajaxform.addFloatForm('<?= Url::to(['bill-of-material/get-float-form'], true) ?>','ajax-document')"
                   href="javascript:;"
                   class="btn btn-info col-md-12">Add More Product</a>
            </div>

        </div>

        <br>


    <?php endif; ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);
$this->registerJs("ajaxform.addFloatForm('" . Url::to(['bill-of-material/get-float-form'], true) . "','ajax-document');  ", \yii\web\View::POS_END);

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

?>

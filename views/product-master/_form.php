<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductMaster */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="product-master-form">

        <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($model); ?>

        <div class="row">

            <div class="col-md-6">
                <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'product_code')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'generic_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'initialQty')->textInput(['maxlength' => true]) ?>

            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'unitPrice')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'sku')->textInput(['maxlength' => true]) ?>


                <?php if (Yii::$app->getRequest()->getQueryParam('type') == 'purchase'): ?>
                    <?= $form->field($model, 'is_purchase')->hiddenInput(['value' => 1])->label(false); ?>
                <?php else: ?>
                    <?= $form->field($model, 'is_purchase')->hiddenInput(['value' => 0])->label(false); ?>
                <?php endif; ?>

                <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>


            </div>

        </div>

        <div class="row">

            <div id="ajax-document"></div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <a id="add-product"
                   onclick="ajaxform.addFloatForm('<?= Url::to(['product-master/get-float-form'], true) ?>','ajax-document')"
                   href="javascript:;"
                   class="btn btn-info col-md-12">Add More Parameter</a>
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

$this->registerJs("


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
                       
                        $('.unit-change').append('<option value='+ response.data.units_of_measures_id +' >'+ response.data.name +'</option>');
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


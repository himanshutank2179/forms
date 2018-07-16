<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseOrder */
/* @var $form yii\widgets\ActiveForm */
$company = Yii::$app->session->get('company');

?>

<div class="purchase-order-form">

    <?php $form = ActiveForm::begin(['id' => 'create-po', 'method' => 'post',]); ?>


    <div class="row">
        <div class="col-md-6">
            <?=
            $form->field($model, 'quote_ref_no')->dropDownList(AppHelper::getQuoteRef(), [
                'class' => 'form-control select4',
                'prompt' => 'Please Select'
            ]);
            ?>

            <?=
            $form->field($model, 'inspection_by')->dropDownList([
                'Vendor'=>'Vendor',
                'Third Party'=>'Third Party',
                'Customer By Own'], [
                'class' => 'form-control select4',
                'prompt' => 'Please Select'
            ]);
            ?>

            <?= $form->field($model, 'terms')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'delivery_period')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'delivery_required_at')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'mode_of_dispatch')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'payment_terms')->textInput(['maxlength' => true]) ?>


        </div>
    </div>









    <?php if(!$model->isNewRecord):  ?>
        <div class="row">
            <div class="col-md-2">
                <?=
                $form->field($model, 'product_id')->dropDownList(AppHelper::getRawMaterials(), [
                    'class' => 'form-control select4',
                    'prompt' => 'Please Select',
                    'id' => 'purchaseorder-product_id'

                ]);
                ?>
            </div>
            <div class="col-md-2">
                <?=
                $form->field($model, 'vendor_id')->dropDownList(AppHelper::getVendors(), [
                    'class' => 'form-control select4',
                    'prompt' => 'Please Select',
                    'id' => 'purchaseorder-vendor_id',

                ]);
                ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'po_no')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'qty')->textInput() ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'unit_price')->textInput() ?>
            </div>
            <br>
            <?= $form->field($model, 'created_at')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false); ?>
            <div class="col-md-2">

                <?= Html::submitButton('Create Purchase Order', ['class' => 'btn btn-success']) ?>

            </div>


        </div>
    <?php else: ?>
        <div class="row">

            <div id="ajax-document"></div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <a id="add-product"
                   onclick="ajaxform.addFloatForm('<?= Url::to(['purchase-order/get-float-form'], true) ?>','ajax-document')"
                   href="javascript:;"
                   class="btn btn-info col-md-12">Add More Product</a>
            </div>

        </div>

        <br>
        <?= Html::submitButton('Create Purchase Order', ['class' => 'btn btn-success']) ?>
    <?php endif;  ?>






    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);

$this->registerJs("
   $('#add-product').trigger('click');

", \yii\web\View::POS_END);
$this->registerJs("
    function addNewProduct(){ 
        ajaxform.addFloatForm('" . Url::to(['purchase-order/get-float-form'], true) . "','ajax-document');               
    }
", \yii\web\View::POS_END);
?>

<?php
$company = Yii::$app->session->get('company');

$this->registerJs("
var company_state_id = '" . $company->state_id . "';

function gstStateHandler(element){ 

$.ajax(
	{
	type: 'GET',
	url: 'get-vendor-details',
	data: {
		'id': $(element).val()
	},
	success: function (res)
	{
		console.log(res);
		if(company_state_id == res.state_id){
		    
		}
	}
    });

}

 


", \yii\web\View::POS_END);
?>


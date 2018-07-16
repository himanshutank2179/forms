<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderAmendment */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="order-amendment-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-6">

                <?= $form->field($model, 'purchase_order_no')->dropDownList(AppHelper::getPONo(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

                <?= $form->field($model, 'date')->textInput(['class' => 'datepicker form-control']) ?>

                <?= $form->field($model, 'quotation_ref_no')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'delivery_period')->textInput(['maxlength' => true]) ?>


                <?= $form->field($model, 'inspected_by')->dropDownList([
                    'Vendor' => 'Vendor',
                    'Third Party' => 'Third Party',
                    'Customer By Own'],
                    ['class' => 'form-control select4', 'prompt' => 'Please Select',]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'delivery_required_at')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'made_of_dispatch')->textInput(['maxlength' => true]) ?>


                <?= $form->field($model, 'insurance')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'approved_by')->textInput(['maxlength' => true]) ?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">

                <?= $form->field($model, 'revised_terms')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-md-6">

                <?= $form->field($model, 'payment_terms')->textarea(['rows' => 6]) ?>
            </div>
        </div>

        <div class="row">

            <div id="ajax-document"></div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <a onclick="ajaxform.addFloatForm('<?= Url::to(['/order-amendment/get-float-form'], true) ?>','ajax-document')"
                   href="javascript:;"
                   class="btn btn-info col-md-12">Add More Product</a>
            </div>

        </div>

        <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>


        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<?php

$this->registerJs("ajaxform.addFloatForm('" . Url::to(['/order-amendment/get-float-form'], true) . "','ajax-document')", \yii\web\View::POS_END);
$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);

$this->registerJs("
   function rateHandler(element){
        let ID = $(element).attr('id');
        let idArr = ID.split('-');
        let elementIndex = idArr[3];
        console.log(elementIndex);
        let qty = $('#order-amendment-quantity-' + elementIndex).val();
        let rate_per_unit = $('#order-amendment-rate_per_unit-' + elementIndex).val();
        let total = (parseFloat(rate_per_unit) * parseFloat(qty));
        $('#order-amendment-total_amount-' + elementIndex).val(total);
        
        
        
   
   }
", \yii\web\View::POS_END);
?>
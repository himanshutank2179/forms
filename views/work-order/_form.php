<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WorkOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'customer_id')->dropDownList(AppHelper::getClients(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'date')->textInput(['class'=>'form-control datepicker']) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'approved_by')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'production_monitoring')->textInput(['maxlength' => true]) ?>
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
    <br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("ajaxform.addFloatForm('" . Url::to(['/work-order/get-float-form'], true) . "','ajax-document')", \yii\web\View::POS_END);
$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);


?>

<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InspectionPlaner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inspection-planer-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->dropDownList(AppHelper::getProducts(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'process_id')->dropDownList(AppHelper::getProcess(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'parameter_id')->dropDownList(AppHelper::getParameters(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'tolerance')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'acceptance_criteria')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'inspection_stage')->dropDownList(['While Receiving' => 'While Receiving', 'During Process' => 'During Process', 'Before Final Dispatch' => 'Before Final Dispatch', 'During Commission' => 'During Commission', 'Brake Down' => 'Brake Down'],['prompt'=>'Please Select']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'sampling_plan')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'test_method')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'inspected_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'approved_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

            <?= $form->field($model, 'record')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("
    $('#inspectionplaner-parameter_id').on('change',function(){
        var value = $(this).val();
        $.ajax(
        {
            type: 'GET',
            url: 'get-parameter-info',
            data: {
                'id': value
            },
            success: function (res)
            {                
                var ac_minus = parseInt(res.value) - parseInt(res.tolerance);
                var ac_plus = parseInt(res.value) + parseInt(res.tolerance);               
                $('#inspectionplaner-tolerance').val(res.tolerance);                
                $('#inspectionplaner-acceptance_criteria').val(ac_minus+ ',' +ac_plus);                
            }
        })
    });
", \yii\web\View::POS_END);
?>


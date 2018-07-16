<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BomMfgTracker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bom-mfg-tracker-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->dropDownList(AppHelper::getProducts(), ['prompt' => 'Select Product']) ?>

            <?= $form->field($model, 'raw_material_id')->dropDownList(AppHelper::getProducts(), ['prompt' => 'Select Product']) ?>

            <?= $form->field($model, 'units')->textInput() ?>

            <?= $form->field($model, 'unit_of_measure_id')->dropDownList(AppHelper::getUnitsOfMeasures() + [0 => 'Add New Measure Unit'], ['prompt' => 'Select Unit']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'raw_material_units_used_till_now')->textInput() ?>

            <?= $form->field($model, 'available_raw_material')->textInput() ?>

            <?= $form->field($model, 'products_made')->textInput() ?>


        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<?php
$this->registerJs("
var addUnitUrl = '" . \yii\helpers\Url::to(['/units-of-measures/create']) . "';
$('#bommfgtracker-unit_of_measure_id').on('change', function(){
    let ddValue = $(this).val();
    if(ddValue == 0){
        $('#common_popup').modal('show')
        .find('#modalContent')
        .load(addUnitUrl);
    }
});
", \yii\web\View::POS_END);
?>

<?php
$this->registerJs("

$('body').on('beforeSubmit', 'form#create-unit', function (e) {
    e.preventDefault();
    var formComent = $(this);
    
    if (formComent.find('.has-error').length)
    {
    return false;
    }
    
    $.ajax({
        url    : '" . \yii\helpers\BaseUrl::to(['/units-of-measures/create'], true) . "',
        type   : 'post',
        data   : formComent.serialize(),
        success: function (response)
        {
            console.log(response);
            toastr.options = {
              'closeButton': false,
              'debug': false,
              'newestOnTop': false,
              'progressBar': false,
              'positionClass': 'toast-bottom-full-width',
              'preventDuplicates': false,
              'onclick': null,
              'showDuration': '300',
              'hideDuration': '1000',
              'timeOut': '5000',
              'extendedTimeOut': '1000',
              'showEasing': 'swing',
              'hideEasing': 'linear',
              'showMethod': 'fadeIn',
              'hideMethod': 'fadeOut'
            }
            if(response.status == 200){
            toastr.success('Success!',response.data.name + ' Added');
                $('#common_popup').modal('hide');
                 $('#bommfgtracker-unit_of_measure_id')
                    .prepend($('<option></option>')
                    .attr('value',response.data.units_of_measures_id)
                    .text(response.data.name));
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





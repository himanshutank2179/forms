<?php

use app\helpers\AppHelper;
use kartik\daterange\DateRangePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrainingPlanner */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="training-planner-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'name_of_training')->textInput(['maxlength' => true]) ?>

                <label for="trainingplanner-period">Period</label>
                <?= DateRangePicker::widget([
                    'model' => $model,
                    'attribute' => 'period',
                    'convertFormat' => true,
                    'pluginOptions' => [
                        'timePicker' => true,
                        'timePickerIncrement' => 30,
                        'locale' => [
                            'format' => 'Y-m-d h:i A'
                        ]
                    ]
                ]); ?>

                <?= $form->field($model, 'type_of_training')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'user_id')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select2']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'designation')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'actual_trining_date')->textInput(['class' => 'datepicker form-control']) ?>

                <?= $form->field($model, 'faculty')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'is_trained')->dropDownList([1 => 'YES', 0 => 'NO'], ['class' => 'form-control']) ?>
            </div>

        </div>


        <?= $form->field($model, 'training_feedback')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<?php
$this->registerJs("
$('.select2').select2()
.on('change', function (e) {
     let emp_id = $(this).val();
     $.ajax({
         type: 'GET',
         url: '" . \yii\helpers\Url::to(['/users/emp-info']) . "',
         data: { 
             'id' : emp_id         
         },            
         dataType: 'json',
         success: function (data) {   
                $('#trainingplanner-designation').val(data.designation);                           
         },
         error: function (errormessage) {                
             console.log('Ajax not working');                
         }
    });
}); 


$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    /*startDate: 'today',*/        
    autoclose: true
});

", \yii\web\View::POS_END);

?>
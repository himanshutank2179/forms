<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InstrumentMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instrument-master-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name_of_instrument')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'instrument_identification_no')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'make_and_sr_no')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'capacity')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'least_count')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'acceptance_criteria')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'calibration_certi_no')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'date')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'next_due_on')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'sign_qc')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs("
 
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        /*startDate: 'today', */       
        autoclose: true
    });
    
", \yii\web\View::POS_END);

?>

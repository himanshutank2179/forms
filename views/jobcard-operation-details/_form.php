<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JobcardOperationDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobcard-operation-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jobcard_id')->textInput(['disabled'=>true]) ?>

    <?= $form->field($model, 'operation_id')->dropDownList(AppHelper::getOperations(),['class'=>'form-control']) ?>

    <?= $form->field($model, 'start_from')->textInput(['class'=>'form-control datepicker']) ?>

    <?= $form->field($model, 'end_to')->textInput(['class'=>'form-control datepicker']) ?>

    <?= $form->field($model, 'm_ch_ve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ok')->textInput() ?>

    <?= $form->field($model, 'rejected')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'in_process_qc_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'final_qc_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pressure_test_report_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);
?>

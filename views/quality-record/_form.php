<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QualityRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quality-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'quality_record_no')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'revision')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'date_of_issue')->textInput(['class' => 'datepicker form-control']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'retension')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'frequency')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'maintend_by')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'medium')->textInput(['maxlength' => true]) ?>
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
        startDate: 'today',        
        autoclose: true
    });
    
", \yii\web\View::POS_END);

?>

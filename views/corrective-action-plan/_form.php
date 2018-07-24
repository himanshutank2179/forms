<?php

use app\helpers\AppHelper;
use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CorrectiveActionPlan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="corrective-action-plan-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'date')->textInput(['class' => 'datepicker form-control']) ?>
        </div>
        <div class="col-md-6">

            <?= $form->field($model, 'department_id')->dropDownList(AppHelper::getDepartments(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'non_confirmitie')->widget(TinyMce::className(), [
                'options' => ['rows' => 6],
                'language' => 'en',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste"
                    ],
                    'branding' => false,
                    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                ]
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'identified_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'c_action_recomand')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'responsibility')->dropDownList(AppHelper::getResponsibility(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'management_representative')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'taken_by')->dropDownList(AppHelper::getEmployee(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'non_confirmitie_desc')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'result_of_investigation')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'evidence')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'document_change')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'correction_effect')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'applicable_doc')->textarea(['rows' => 6]) ?>
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
        autoclose: true,
        format: 'yyyy-mm-dd',        
        todayBtn: 'linked',
        todayHighlight: true});
", \yii\web\View::POS_END);
?>

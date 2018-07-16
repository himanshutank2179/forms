<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Responsibility;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
$selectedRes = [];

if (!$model->isNewRecord) {
    foreach ($model->employeeResponsibility as $r) {
        array_push($selectedRes, $r->responsibility_id);
    }
    $model->responsibility_id = $selectedRes;
}

?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'emp_code')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'designation')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'experience')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'responsibility_id')->dropDownList(AppHelper::getResponsibility(), ['multiple' => true, 'class' => 'form-control multiselect',]) ?>

            <?= $form->field($model, 'authority')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'signature_of_staff')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'education_qualification')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'professional_education')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("
    $('.multiselect').select2();
    ", \yii\web\View::POS_END);
?>

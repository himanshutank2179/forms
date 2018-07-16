<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Parameters */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parameters-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'tolerance')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'unit')->dropDownList(AppHelper::getUnitsOfMeasures(), ['class' => 'form-control select4', 'prompt' => 'Please Select']) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$this->registerJs("$('.select4').select2({placeholder: 'Please Select',});", \yii\web\View::POS_END);
?>

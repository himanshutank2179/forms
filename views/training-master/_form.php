<?php

use kartik\daterange\DateRangePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrainingMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="training-master-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model) ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name_of_training')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
            <label for="">Training Period </label>
            <?=   DateRangePicker::widget([
                'model'=>$model,
                'attribute'=>'period',
                'convertFormat'=>true,
                'pluginOptions'=>[
                    'timePicker'=>true,
                    'timePickerIncrement'=>30,
                    'locale'=>[
                        'format'=>'Y-m-d h:i A'
                    ]
                ]
            ]); ?>
        </div>
    </div>

    <br>




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

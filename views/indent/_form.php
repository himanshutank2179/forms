<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Indent */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="indent-form">

        <?php $form = ActiveForm::begin(); ?>


        <div class="row">
            <div class="col-md-6"><?= $form->field($model, 'purchase_monitoring')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-6"><?= $form->field($model, 'date')->textInput(['class' => 'form-control datepicker']) ?></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'reviewed_by')->textInput() ?></div>
        <div class="col-md-6"><?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?></div>
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
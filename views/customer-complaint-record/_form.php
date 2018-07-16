<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerComplaintRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-complaint-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'date')->textInput(['class' => 'datepicker form-control']) ?>

            <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'customer_address')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'reference')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'type_of_complaint')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>




        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'c_responsibility')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'c_cataken')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'c_sign')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'p_responsibility')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'p_cataken')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'p_sign')->textInput(['maxlength' => true]) ?>
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
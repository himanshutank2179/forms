<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MachineMaster */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="machine-master-form">

        <?php $form = ActiveForm::begin(); ?>


        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'identification_no')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'mfg_by')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'machine_sr_no')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'installation_date')->textInput(['class' => 'datepicker form-control']) ?>

                <?= $form->field($model, 'capacity')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'purchase_cost')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

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
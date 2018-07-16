<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SupplierMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'approved_for_product')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'rating_performance')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'grade')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'evaluated_by')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'approved_by')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

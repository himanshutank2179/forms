<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductMfgTracker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-mfg-tracker-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'product_id')->dropDownList(AppHelper::getProducts(),['prompt'=>'Select Product']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'qty')->textInput() ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

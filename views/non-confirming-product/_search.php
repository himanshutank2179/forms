<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NonConfirmingProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="non-confirming-product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'non_confirming_product_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'GRN_NO') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'resion') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'balance') ?>

    <?php // echo $form->field($model, 'return_to_vendor_qty') ?>

    <?php // echo $form->field($model, 'rework_qty') ?>

    <?php // echo $form->field($model, 'scrap_qty') ?>

    <?php // echo $form->field($model, 'sales_on_discount_qty') ?>

    <?php // echo $form->field($model, 'sign_of_prod') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

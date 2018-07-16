<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseReceiptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="purchase-receipt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'purchase_receipt_id') ?>

    <?= $form->field($model, 'GRN_NO') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'unit') ?>

    <?= $form->field($model, 'receive_qty') ?>

    <?php // echo $form->field($model, 'rejected_qty') ?>

    <?php // echo $form->field($model, 'accepted_qty') ?>

    <?php // echo $form->field($model, 'unit_price') ?>

    <?php // echo $form->field($model, 'order_no') ?>

    <?php // echo $form->field($model, 'cgst') ?>

    <?php // echo $form->field($model, 'sgst') ?>

    <?php // echo $form->field($model, 'igst') ?>

    <?php // echo $form->field($model, 'total_amount') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

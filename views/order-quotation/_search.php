<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderQuotationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-quotation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'order_quotation_id') ?>

    <?= $form->field($model, 'inquiry_date') ?>

    <?= $form->field($model, 'delivery_period') ?>

    <?= $form->field($model, 'our_quote_ref_num') ?>

    <?= $form->field($model, 'mod_of_dispatch') ?>

    <?php // echo $form->field($model, 'payment_terms') ?>

    <?php // echo $form->field($model, 'inasurance') ?>

    <?php // echo $form->field($model, 'inspection_by') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

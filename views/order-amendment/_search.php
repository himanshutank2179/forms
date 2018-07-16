<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderAmendmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-amendment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'order_amendment_id') ?>

    <?= $form->field($model, 'purchase_order_no') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'quotation_ref_no') ?>

    <?= $form->field($model, 'revised_terms') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'delivery_period') ?>

    <?php // echo $form->field($model, 'delivery_required_at') ?>

    <?php // echo $form->field($model, 'made_of_dispatch') ?>

    <?php // echo $form->field($model, 'payment_terms') ?>

    <?php // echo $form->field($model, 'insurance') ?>

    <?php // echo $form->field($model, 'inspected_by') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

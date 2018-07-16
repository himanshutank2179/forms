<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerRequirementsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-requirements-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'customer_requirement_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'client_id') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'product_info') ?>

    <?php // echo $form->field($model, 'quatation') ?>

    <?php // echo $form->field($model, 'quatation_ref') ?>

    <?php // echo $form->field($model, 'customer_po_number') ?>

    <?php // echo $form->field($model, 'order_review_by') ?>

    <?php // echo $form->field($model, 'date_of_dispatch') ?>

    <?php // echo $form->field($model, 'item') ?>

    <?php // echo $form->field($model, 'invoice_number') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerComplaintRecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-complaint-record-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'customer_complaint_record_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'customer_name') ?>

    <?= $form->field($model, 'customer_address') ?>

    <?= $form->field($model, 'reference') ?>

    <?php // echo $form->field($model, 'type_of_complaint') ?>

    <?php // echo $form->field($model, 'product_name') ?>

    <?php // echo $form->field($model, 'c_responsibility') ?>

    <?php // echo $form->field($model, 'c_cataken') ?>

    <?php // echo $form->field($model, 'c_sign') ?>

    <?php // echo $form->field($model, 'p_responsibility') ?>

    <?php // echo $form->field($model, 'p_cataken') ?>

    <?php // echo $form->field($model, 'p_sign') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

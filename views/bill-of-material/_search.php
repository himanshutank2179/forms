<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BillOfMaterialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bill-of-material-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'bill_of_material_id') ?>

    <?= $form->field($model, 'raw_materia_id') ?>

    <?= $form->field($model, 'qty') ?>

    <?= $form->field($model, 'unit_id') ?>

    <?= $form->field($model, 'product_code') ?>

    <?php // echo $form->field($model, 'document_id') ?>

    <?php // echo $form->field($model, 'procuring_by') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

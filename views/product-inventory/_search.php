<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductInventorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-inventory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'product_inventory_id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'initial_qty') ?>

    <?= $form->field($model, 'current_qty') ?>

    <?= $form->field($model, 'unit_price') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'min_qty') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

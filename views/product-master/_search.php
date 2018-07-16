<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'product_master_id') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'generic_name') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'technical_spacifications') ?>

    <?php // echo $form->field($model, 'bill_of_material') ?>

    <?php // echo $form->field($model, 'is_purchase') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

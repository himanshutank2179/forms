<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SupplierMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'supplier_master_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'approved_for_product') ?>

    <?= $form->field($model, 'rating_performance') ?>

    <?php // echo $form->field($model, 'grade') ?>

    <?php // echo $form->field($model, 'evaluated_by') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

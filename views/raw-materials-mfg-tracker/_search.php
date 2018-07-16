<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RawMaterialsMfgTrackerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="raw-materials-mfg-tracker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'raw_materials_mfg_tracker_id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'starting_inventory') ?>

    <?= $form->field($model, 're_order_point') ?>

    <?= $form->field($model, 'purchases') ?>

    <?php // echo $form->field($model, 'available_now') ?>

    <?php // echo $form->field($model, 'to_order') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

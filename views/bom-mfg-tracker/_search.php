<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BomMfgTrackerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bom-mfg-tracker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'bom_mfg_tracker_id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'raw_material_id') ?>

    <?= $form->field($model, 'units') ?>

    <?= $form->field($model, 'unit_of_measure_id') ?>

    <?php // echo $form->field($model, 'raw_material_units_used_till_now') ?>

    <?php // echo $form->field($model, 'available_raw_material') ?>

    <?php // echo $form->field($model, 'products_made') ?>

    <?php // echo $form->field($model, 'id_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JobcardRawMaterialsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobcard-raw-materials-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'jobcard_raw_material_id') ?>

    <?= $form->field($model, 'item_name') ?>

    <?= $form->field($model, 'qty') ?>

    <?= $form->field($model, 'heat_no') ?>

    <?= $form->field($model, 'lot_no') ?>

    <?php // echo $form->field($model, 'tc_no') ?>

    <?php // echo $form->field($model, 'jobcard_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IndentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'indent_id') ?>

    <?= $form->field($model, 'purchase_indent_no') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'purchase_monitoring') ?>

    <?= $form->field($model, 'reviewed_by') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

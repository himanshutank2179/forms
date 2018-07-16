<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JobcardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobcard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'jobcard_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'finish_product_id') ?>

    <?= $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

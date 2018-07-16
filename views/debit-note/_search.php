<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DebitNoteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="debit-note-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'debit_note_id') ?>

    <?= $form->field($model, 'party_name') ?>

    <?= $form->field($model, 'address1') ?>

    <?= $form->field($model, 'address2') ?>

    <?= $form->field($model, 'address3') ?>

    <?php // echo $form->field($model, 'debit_note_no') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'bill_no') ?>

    <?php // echo $form->field($model, 'bill_date') ?>

    <?php // echo $form->field($model, 'delivery_charges') ?>

    <?php // echo $form->field($model, 'party_gst_no') ?>

    <?php // echo $form->field($model, 'company_gst_no') ?>

    <?php // echo $form->field($model, 'party_gst') ?>

    <?php // echo $form->field($model, 'company_gst') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

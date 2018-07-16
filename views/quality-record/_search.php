<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QualityRecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quality-record-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'quality_record_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'quality_record_no') ?>

    <?= $form->field($model, 'revision') ?>

    <?= $form->field($model, 'date_of_issue') ?>

    <?php // echo $form->field($model, 'retension') ?>

    <?php // echo $form->field($model, 'frequency') ?>

    <?php // echo $form->field($model, 'maintend_by') ?>

    <?php // echo $form->field($model, 'medium') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentsAndDistributionMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documents-and-distribution-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'documents_and_distribution_master_id') ?>

    <?= $form->field($model, 'name_of_document') ?>

    <?= $form->field($model, 'document_no') ?>

    <?= $form->field($model, 'issue_no') ?>

    <?= $form->field($model, 'revision') ?>

    <?php // echo $form->field($model, 'date_of_issue') ?>

    <?php // echo $form->field($model, 'copy_holders_department') ?>

    <?php // echo $form->field($model, 'sign_of_receiver') ?>

    <?php // echo $form->field($model, 'is_international') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

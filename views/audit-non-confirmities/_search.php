<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuditNonConfirmitiesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-non-confirmities-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'audit_non_confirmities_id') ?>

    <?= $form->field($model, 'design_dev') ?>

    <?= $form->field($model, 'non-confirming_class') ?>

    <?= $form->field($model, 'non_confirmitie') ?>

    <?= $form->field($model, 'company_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerCompaintReportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-compaint-report-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'customer_compaint_report_id') ?>

    <?= $form->field($model, 'customer_compaint_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'date_of_receipt_of_compliant') ?>

    <?= $form->field($model, 'received_by') ?>

    <?php // echo $form->field($model, 'made_of_receipt') ?>

    <?php // echo $form->field($model, 'customer_id') ?>

    <?php // echo $form->field($model, 'product_id') ?>

    <?php // echo $form->field($model, 'incomming_qc_no') ?>

    <?php // echo $form->field($model, 'date_of_dispatch') ?>

    <?php // echo $form->field($model, 'invoice_no') ?>

    <?php // echo $form->field($model, 'compaint_desc') ?>

    <?php // echo $form->field($model, 'compaint_nature') ?>

    <?php // echo $form->field($model, 'report_of_work') ?>

    <?php // echo $form->field($model, 'corrective_action') ?>

    <?php // echo $form->field($model, 'taken_action_result') ?>

    <?php // echo $form->field($model, 'proposed_action') ?>

    <?php // echo $form->field($model, 'analysed_by') ?>

    <?php // echo $form->field($model, 'closed_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

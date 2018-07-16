<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IncommingQcSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="incomming-qc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'incomming_qc_id') ?>

    <?= $form->field($model, 'sr_no') ?>

    <?= $form->field($model, 'manufacturer') ?>

    <?= $form->field($model, 'label_particulars') ?>

    <?= $form->field($model, 'mfg_date') ?>

    <?php // echo $form->field($model, 'heat') ?>

    <?php // echo $form->field($model, 'lot') ?>

    <?php // echo $form->field($model, 'batch_no') ?>

    <?php // echo $form->field($model, 'v_test_no') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'general_condition') ?>

    <?php // echo $form->field($model, 'product_id') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'visual_examination') ?>

    <?php // echo $form->field($model, 'dimensional_check') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'width') ?>

    <?php // echo $form->field($model, 'thickness') ?>

    <?php // echo $form->field($model, 'diameter') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'physical_chemical_analysis') ?>

    <?php // echo $form->field($model, 'product_traceability_mark') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'inspected_by') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

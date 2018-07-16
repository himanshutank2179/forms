<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContractReviewSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-review-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'contract_review_id') ?>

    <?= $form->field($model, 'customer_name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'street') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'pincode') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'fax_no') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'contact_person_name') ?>

    <?php // echo $form->field($model, 'designation') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'purchase_order_no') ?>

    <?php // echo $form->field($model, 'item_description') ?>

    <?php // echo $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'testing_requirements') ?>

    <?php // echo $form->field($model, 'delivery_period') ?>

    <?php // echo $form->field($model, 'mode_of_dispatch') ?>

    <?php // echo $form->field($model, 'insurance') ?>

    <?php // echo $form->field($model, 'payment') ?>

    <?php // echo $form->field($model, 'packing_terms') ?>

    <?php // echo $form->field($model, 'other_terms_and_condition') ?>

    <?php // echo $form->field($model, 'cir_quotation_no') ?>

    <?php // echo $form->field($model, 'communication_of_order_conformation_no_date') ?>

    <?php // echo $form->field($model, 'terms_condition_reviewed_detail') ?>

    <?php // echo $form->field($model, 'material_specification') ?>

    <?php // echo $form->field($model, 'test_specification') ?>

    <?php // echo $form->field($model, 'mode_of_transport') ?>

    <?php // echo $form->field($model, 'reference_date_of_communicate_about_order_ready_for_inspection') ?>

    <?php // echo $form->field($model, 'reference_date_about_dispatch_of_material') ?>

    <?php // echo $form->field($model, 'conformation_about_satisfactory_receipt_of_ordered_item_and_qty') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

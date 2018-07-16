<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ContractReview */

$this->title = $model->contract_review_id;
$this->params['breadcrumbs'][] = ['label' => 'Contract Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-review-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->contract_review_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->contract_review_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'contract_review_id',
            'customer_name',
            'address:ntext',
            'street',
            'city',
            'country',
            'pincode',
            'phone',
            'fax_no',
            'email:email',
            'contact_person_name',
            'designation',
            'mobile',
            'purchase_order_no:ntext',
            'item_description:ntext',
            'qty:ntext',
            'testing_requirements:ntext',
            'delivery_period:ntext',
            'mode_of_dispatch:ntext',
            'insurance:ntext',
            'payment:ntext',
            'packing_terms:ntext',
            'other_terms_and_condition:ntext',
            'cir_quotation_no:ntext',
            'communication_of_order_conformation_no_date:ntext',
            'terms_condition_reviewed_detail',
            'material_specification:ntext',
            'test_specification:ntext',
            'mode_of_transport:ntext',
            'reference_date_of_communicate_about_order_ready_for_inspection:ntext',
            'reference_date_about_dispatch_of_material:ntext',
            'conformation_about_satisfactory_receipt_of_ordered_item_and_qty:ntext',
        ],
    ]) ?>

</div>

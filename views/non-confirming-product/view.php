<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NonConfirmingProduct */

$this->title = $model->non_confirming_product_id;
$this->params['breadcrumbs'][] = ['label' => 'Non Confirming Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="non-confirming-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->non_confirming_product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->non_confirming_product_id], [
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
            'non_confirming_product_id',
            'date',
            'GRN_NO',
            'product_id',
            'resion:ntext',
            'qty',
            'balance',
            'return_to_vendor_qty',
            'rework_qty',
            'scrap_qty',
            'sales_on_discount_qty',
            'sign_of_prod',
            'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

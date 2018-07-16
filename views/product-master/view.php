<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductMaster */

$this->title = $model->product_master_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_master_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_master_id], [
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
            'product_master_id',
            'product_name',
            'generic_name',
            'model',
            'technical_spacifications:ntext',
            'bill_of_material',
            'is_purchase',
            'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

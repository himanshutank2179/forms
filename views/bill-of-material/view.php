<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BillOfMaterial */

$this->title = 'Bill Of Material';
$this->params['breadcrumbs'][] = ['label' => 'Bill Of Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bill-of-material-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bill_of_material_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bill_of_material_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'prod_code' => $model->product_code], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'bill_of_material_id',
            'raw_materia_id',
            'qty',
            'unit_id',
            'product_code',
            // 'document_id',
            [
                'attribute' => 'document_id',
                'value' => function ($data) {
                return $data->document->name_of_document;
                },
                'filter' => false
            ],
            'procuring_by',
            // 'is_deleted',
            // 'created_at',
        ],
    ]) ?>

</div>

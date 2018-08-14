<?php

use app\models\Clients;
use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\models\WorkOrder */

$this->title = 'Work Order';
$this->params['breadcrumbs'][] = ['label' => 'Work Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-order-view">

    <h3>Work Order</h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->work_order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->work_order_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print-work-order', 'id' => $model->work_order_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'work_order_id',
            [
                'attribute'=>'customer_id',
                'value'=>function($model){
                    return !empty(Clients::findOne($model->customer_id)->name) ? Clients::findOne($model->customer_id)->name : '';
                }
            ],
            'date',
            'production_monitoring',
            'approved_by',
            /*'created_at',*/
        ],
    ]) ?>

</div>

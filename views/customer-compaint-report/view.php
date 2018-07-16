<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerCompaintReport */

$this->title = $model->customer_compaint_report_id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Compaint Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-compaint-report-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->customer_compaint_report_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->customer_compaint_report_id], [
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
          /*  'customer_compaint_report_id',*/
            'customer_compaint_id',
            'date',
            'date_of_receipt_of_compliant',
            'received_by',
            'made_of_receipt',
            'customer_id',
            'product_id',
            'incomming_qc_no',
            'date_of_dispatch',
            'invoice_no',
            'compaint_desc:ntext',
            'compaint_nature',
            'report_of_work:ntext',
            'corrective_action:ntext',
            'taken_action_result:ntext',
            'proposed_action:ntext',
            'analysed_by',
            'closed_by',
            'created_at',
        ],
    ]) ?>

</div>

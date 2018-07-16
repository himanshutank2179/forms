<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jobcard */

$this->title = $model->jobcard_id;
$this->params['breadcrumbs'][] = ['label' => 'Jobcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobcard-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->jobcard_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->jobcard_id], [
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
            /*'jobcard_id',*/
            'date',
            'product_description',
            'finish_product_id',
            /*'material',*/
            'size',
            'qty',
            'class',
            'remark:ntext',
            'is_deleted',
            'created_at',
        ],
    ]) ?>


    <h3>Operation Details</h3>

    <div class="table-responsive">
        <table class="table table-striped">
            <tr class="detail-row heading">
                <td>Operation</td>
                <td>Start From</td>
                <td>End To</td>
                <td>MCH/VE</td>
                <td>Parameter</td>
                <td>OK</td>
                <td>Rejected</td>
                <td>Total</td>
                <td>In Process QC No</td>
                <td>Final QC No</td>
                <td>Pressure Test Report No</td>
                <td>Operator</td>
                <td>Product/Item</td>
                <td>Quantity</td>
                <td>Incomming QC No</td>
                <td>Remark</td>
                <td>Edit</td>
            </tr>

            <?php foreach ($model->jobcardOperationDetails as $jobcardDetail): ?>
                <tr class="detail-row">
                    <td><?= !empty($jobcardDetail->operation->name) ? $jobcardDetail->operation->name : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->start_from) ? $jobcardDetail->start_from : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->end_to) ? $jobcardDetail->end_to : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->m_ch_ve) ? $jobcardDetail->m_ch_ve : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->parameter) ? $jobcardDetail->parameter : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->ok) ? $jobcardDetail->ok : ''; ?></td>
                    <td><?= !empty($jobcardDetail->rejected) ? $jobcardDetail->rejected : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->total) ? $jobcardDetail->total : ''; ?></td>
                    <td><?= !empty($jobcardDetail->in_process_qc_no) ? $jobcardDetail->in_process_qc_no : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->final_qc_no) ? $jobcardDetail->final_qc_no : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->pressure_test_report_no) ? $jobcardDetail->pressure_test_report_no : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->operator) ? $jobcardDetail->operator : ''; ?></td>
                    <td><?= !empty($jobcardDetail->product->product_name) ? $jobcardDetail->product->product_name : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->qty) ? $jobcardDetail->qty : ''; ?></td>
                    <td><?= !empty($jobcardDetail->incomming_qc_no) ? Html::a($jobcardDetail->incomming_qc_no, \yii\helpers\Url::to(['incomming-qc/view', 'id' => $jobcardDetail->incomming_qc_no], true), ['class' => 'open_common_popup']) : 'N/A'; ?></td>
                    <td><?= !empty($jobcardDetail->remark) ? $jobcardDetail->remark : 'N/A'; ?></td>
                    <td>
                        <?= Html::a('Edit ', \yii\helpers\Url::to(['jobcard-operation-details/update', 'id' => $jobcardDetail->jobcard_operation_detail_id], true), ['class' => 'btn btn-primary open_update_popup']) ?>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>


</div>

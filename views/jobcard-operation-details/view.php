<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\JobcardOperationDetails */

$this->title = $model->jobcard_operation_detail_id;
$this->params['breadcrumbs'][] = ['label' => 'Jobcard Operation Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobcard-operation-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->jobcard_operation_detail_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->jobcard_operation_detail_id], [
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
            'jobcard_operation_detail_id',
            'jobcard_id',
            'operation_id',
            'start_from',
            'end_to',
            'm_ch_ve',
            'parameter',
            'ok',
            'rejected',
            'total',
            'in_process_qc_no',
            'final_qc_no',
            'pressure_test_report_no',
            'operator',
            'remark:ntext',
        ],
    ]) ?>

</div>

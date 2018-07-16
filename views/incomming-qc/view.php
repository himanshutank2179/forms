<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IncommingQc */

$this->title = 'GRN NO: ' . $model->GRN_NO;
$this->params['breadcrumbs'][] = ['label' => 'Incomming Qcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incomming-qc-view">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?php Html::a('Update', ['update', 'id' => $model->GRN_NO], ['class' => 'btn btn-primary']) ?>
        <?php Html::a('Delete', ['delete', 'id' => $model->GRN_NO], [
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
            /*'incomming_qc_id',*/
            /*'GRN_NO',*/
            'manufacturer',
            'label_particulars',
            'mfg_date',
            'heat',
            'lot',
            'batch_no',
            'v_test_no',
            'date',
            [
                'attribute' => 'product_id',

                'value' => function ($data) {
                    return $data->product->product_name;
                },

            ],
            'qty',
            'remark:ntext',

            [
                'attribute' => 'inspected_by',

                /*'value' => function ($data) {
                    return !empty($data->inspectedBy->name) ? $data->inspectedBy->name : '';
                },*/

            ],
            [
                'attribute' => 'approved_by',

                'value' => function ($data) {
                    return !empty($data->approvedBy->name) ? $data->approvedBy->name : '';
                },

            ],

            /*'is_deleted',*/
            'created_at',
        ],
    ]) ?>

</div>

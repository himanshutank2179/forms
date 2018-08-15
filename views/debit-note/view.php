<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DebitNote */

$this->title = 'Debit Note';
$this->params['breadcrumbs'][] = ['label' => 'Debit Notes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debit-note-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->debit_note_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->debit_note_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->debit_note_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'debit_note_id',
            // 'party_name',
            [
                'attribute' => 'party_name',
                'value' => function ($model) {
                    return $model->party->name;
                }
            ],
            'address1:ntext',
            'address2:ntext',
            'address3:ntext',
            'debit_note_no',
            'date',
            'bill_no',
            'bill_date',
            'delivery_charges',
            'party_gst_no',
            'company_gst_no',
            'party_gst',
            'company_gst',
            'total',
            'remark:ntext',
            // 'is_deleted',
            // 'created_at',
        ],
    ]) ?>

</div>

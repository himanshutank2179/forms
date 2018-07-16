<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DebitNote */

$this->title = $model->debit_note_id;
$this->params['breadcrumbs'][] = ['label' => 'Debit Notes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debit-note-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->debit_note_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->debit_note_id], [
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
            'debit_note_id',
            'party_name',
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
            'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

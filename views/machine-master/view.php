<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MachineMaster */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Machine Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machine-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->machine_master_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->machine_master_id], [
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
            /*'machine_master_id',*/
            'name',
            'identification_no',
            'mfg_by',
            'machine_sr_no',
            'installation_date',
            'capacity',
            'purchase_cost',
            'location',
            'remark:ntext',
            'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

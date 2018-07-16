<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProcessMaster */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Process Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="process-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->process_master_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->process_master_id], [
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
            'process_master_id',
            'name',
            'is_deleted',
            'created_at',
        ],
    ]) ?>

</div>

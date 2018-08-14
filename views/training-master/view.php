<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TrainingMaster */

$this->title = $model->name_of_training;
$this->params['breadcrumbs'][] = ['label' => 'Training Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="training-master-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->training_master_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->training_master_id], [
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
            // 'training_master_id',
            'name_of_training',
            'period',
        ],
    ]) ?>

</div>

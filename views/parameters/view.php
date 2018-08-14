<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Parameters */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Parameters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parameters-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->parameter_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->parameter_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->parameter_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'parameter_id',
            'name',
            'value',
            'tolerance',
            'unit',
        ],
    ]) ?>

</div>

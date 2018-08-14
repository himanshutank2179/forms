<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Responsibility */

$this->title = $model->responsibility;
$this->params['breadcrumbs'][] = ['label' => 'Responsibilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsibility-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->responsibility_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->responsibility_id], [
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
            // 'responsibility_id',
            'responsibility',
        ],
    ]) ?>

</div>

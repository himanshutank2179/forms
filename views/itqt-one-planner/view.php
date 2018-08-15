<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItqtOnePlanner */

$this->title = 'Itqt One Planner';
$this->params['breadcrumbs'][] = ['label' => 'Itqt One Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itqt-one-planner-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->itqt_one_planner_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->itqt_one_planner_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Print', ['print', 'id' => $model->itqt_one_planner_id], ['class' => 'btn btn-primary', 'target' => '_blank',]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'itqt_one_planner_id',
            // 'product_id',
            [
                'attribute' => 'product_id',
                'value' => function ($model) {
                    return $model->product->product_name;
                }
            ],
            'parameter',
            'sampling_plan',
            'record',
            'resposi_ability',
            // 'created_at',
        ],
    ]) ?>

</div>

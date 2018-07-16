<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItqtTwoPlanner */

$this->title = $model->itqt_two_planner_id;
$this->params['breadcrumbs'][] = ['label' => 'Itqt Two Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itqt-two-planner-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->itqt_two_planner_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->itqt_two_planner_id], [
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
            'itqt_two_planner_id',
            'process',
            'parameter',
            'width',
            'height',
            'size',
            'weight',
            'color',
            'length',
            'thickness',
            'straightness',
            'ovality',
            'tolerance',
            'process_standard_parameter',
            'sampling_plan',
            'record',
            'resposi_ability',
            'created_at',
        ],
    ]) ?>

</div>

<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TrainingPlanner */

$this->title = $model->name_of_training;
$this->params['breadcrumbs'][] = ['label' => 'Training Planners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="training-planner-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->training_planner_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->training_planner_id], [
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
            /*'training_planner_id',*/
            'name_of_training',
            'period',
            'type_of_training',


            'designation',
            'actual_trining_date',
            'faculty',
            'training_feedback:ntext',
            [
                'attribute' => 'is_trained',

                'value' => function ($data) {
                    return ($data->is_trained == 0 ) ? 'NO' : 'YES';
                },


            ],
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DndPlanDsn */

$this->title = $model->dnd_plan_dsn_id;
$this->params['breadcrumbs'][] = ['label' => 'Dnd Plan Dsns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dnd-plan-dsn-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->dnd_plan_dsn_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->dnd_plan_dsn_id], [
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
            'dnd_plan_dsn_id',
            'sr_no',
            'activities_to_perform',
            'responsibility',
            'resources_required',
            'person_consulted',
            'record',
            'activity_to_be_reviewed_on',
            'actual_dt_of_completion',
            'remarks:ntext',
        ],
    ]) ?>

</div>

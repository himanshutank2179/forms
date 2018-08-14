<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DndPlanDsnSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'DND Plan DSNs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dnd-plan-dsn-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dnd Plan Dsn', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'dnd_plan_dsn_id',*/
            'sr_no',
            'activities_to_perform',
            'responsibility',
            'resources_required',
            //'person_consulted',
            //'record',
            //'activity_to_be_reviewed_on',
            //'actual_dt_of_completion',
            //'remarks:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->dnd_plan_dsn_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

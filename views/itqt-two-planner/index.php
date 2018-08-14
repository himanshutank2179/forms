<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ItqtTwoPlannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inspection & Testing Quality Plan Two';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itqt-two-planner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Itqt Two Planner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'itqt_two_planner_id',
            'process',
            'parameter',
            'width',
            'height',
            //'size',
            //'weight',
            //'color',
            //'length',
            //'thickness',
            //'straightness',
            //'ovality',
            //'tolerance',
            //'process_standard_parameter',
            //'sampling_plan',
            //'record',
            //'resposi_ability',
            //'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {print}',
                'buttons' => [
                    'print' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', \yii\helpers\Url::to(['print', 'id' => $model->itqt_two_planner_id]), ['target' => '_blank', 'data-pjax' => "0"]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

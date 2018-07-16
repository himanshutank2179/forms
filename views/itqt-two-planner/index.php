<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ItqtTwoPlannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Itqt Two Planners';
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

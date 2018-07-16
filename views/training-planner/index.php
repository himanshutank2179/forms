<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TrainingPlannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Training Planners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="training-planner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Training Planner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'training_planner_id',*/
            'name_of_training',
            'period',
            'type_of_training',
            [
                'attribute' => 'user_id',

                'value' => function ($data) {
                    return $data->employee->name;
                },

                'filter' => Html::activeDropDownList($searchModel, 'user_id', AppHelper::getEmployee(), ['class' => 'form-control select','prompt' => 'Filter By Users']),

            ],
            [
                'attribute' => 'is_trained',

                'value' => function ($data) {
                    return ($data->is_trained == 0 ) ? 'NO' : 'YES';
                },

                'filter' => Html::activeDropDownList($searchModel, 'is_trained', [1 => 'YES', 0 => 'NO'], ['class' => 'form-control select','prompt' => 'Filter']),
            ],

            //'designation',
            //'actual_trining_date',
            //'faculty',
            //'training_feedback:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

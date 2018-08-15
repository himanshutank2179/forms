<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\InspectionPlanerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inspection Planers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspection-planer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inspection Planer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'inspection_planer_id',
            
            [
                'attribute'=>'product_id',
            ],
            'process_id',
            'parameter_id',
            'tolerance',
            //'inspection_stage',
            //'sampling_plan',
            //'test_method',
            //'inspected_by',
            //'approved_by',
            //'record',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

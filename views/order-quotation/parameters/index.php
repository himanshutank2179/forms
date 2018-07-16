<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParametersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parameters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parameters-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Parameters', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'parameter_id',*/
            'name',
            'value',
            'tolerance',
            [
                'attribute' => 'unit',
                'value' => function ($model) {
                    return $model->unitDetails->name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'unit', AppHelper::getUnitsOfMeasures(), ['class' => 'form-control select','prompt' => 'Filter By Units']),
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
